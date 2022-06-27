<?php

namespace App\Http\Controllers;

use App\Exports\TemplateInputExport;
use App\Imports\InputDsrtImport;
use App\Models\Desa;
use App\Models\DsrtDikirim;
use App\Models\Kab;
use App\Models\Kec;
use App\Models\SampleDsrt;
use App\Models\SuratPengiriman;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\FuncCall;

use function PHPSTORM_META\type;
use PDF;

class SipmenController extends Controller
{
    //
    public function input(Request $request)
    {
        $user = Auth::user();

        if ($user->kode_wilayah == '1600') {
            $data_kab = Kab::all();
            $kode_kab = $request->kode_kab;
            $kode_kec = $request->kode_kec;
            $kode_desa = $request->kode_desa;
            $nbs = $request->nbs;
        } else {
            $kode_kab = substr($user->kode_wilayah, 2, 2);
            $data_kab = Kab::where('kode_kab', $kode_kab)->get();
            $kode_kec = $request->kode_kec;
            $kode_desa = $request->kode_desa;
            $nbs = $request->nbs;
        }


        // $data_dsrt->appends($request->all());

        // try {
        //     $response_api = Http::get('http://sipmen.bps.go.id/api1600');
        //     if ($response_api->json()) {
        return view('pages/input', compact('data_kab', 'kode_kab', 'kode_kec', 'kode_desa'));
        //     } else {
        //         return view('pages/vpn_warning');
        //     }
        // } catch (\Throwable $th) {
        //     return view('pages/vpn_warning');
        // }
    }

    public function get_sample_dsrt(Request $request)
    {
        $val = $request->validate([
            'kode_prov' => ['required'],
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
            'kode_desa' => ['required'],
            'nbs' => ['required'],
        ]);

        if ($val) {
            $sample_dsrt = SampleDsrt::where('kode_prov', $request->kode_prov)->where('kode_kab', $request->kode_kab)->where('kode_kec', $request->kode_kec)->where('kode_desa', $request->kode_desa)->where('nbs', $request->nbs)->get();

            return ($sample_dsrt);
        }
    }

    public function sync_sipmen_api(Request $request)
    {
        try {
            $user = Auth::user();

            if ($user->kode_wilayah == '1600') {
                # code...
                $response_api = Http::get('http://sipmen.bps.go.id/api1600/');
                if ($response_api->json()) {
                    return $response_api->json();
                } else {
                    return response('failed');
                }
            } else {
                # code...
                $kode_kab = substr($user->kode_wilayah, 2, 2);
                $response_api = Http::get('http://sipmen.bps.go.id/api1600/' . $kode_kab);
                if ($response_api->json()) {
                    return $response_api->json();
                } else {
                    return response('failed');
                }
            }
        } catch (\Throwable $th) {
            return response('failed');
        }
    }

    public function input_dokumen_dikirim(Request $request)
    {
        $val = $request->validate([
            'data_dsrt' => ['required'],
        ]);

        if ($val) {
            $data_dsrt = $request->data_dsrt;
            foreach ($data_dsrt as $rt) {
                # code...
                try {
                    DsrtDikirim::updateOrCreate(
                        [
                            'kode_prov' => $rt['kode_prov'],
                            'kode_kab' => $rt['kode_kab'],
                            'kode_kec' => $rt['kode_kec'],
                            'kode_desa' => $rt['kode_desa'],
                            'nbs' => $rt['nbs'],
                            'no_dsrt' => (int)$rt['no_dsrt'],
                            'nus' => (int)$rt['nus'],
                        ],
                        [
                            'nomor_surat' => $rt['nomor_surat'],
                            'nama_sls' => $rt['nama_sls'],
                            'nama_krt' => $rt['nama_krt'],
                            'status_dikirim' => (int)$rt['status_dikirim'],
                            'status_response' => (int)$rt['status_response'],
                        ]
                    );
                } catch (Exception $e) {
                    return response()->json([
                        'error' => 'Whoops, looks like something went wrong.',
                        'debug' => $e->getMessage()
                    ]);
                }
            }

            return response('success');
        }
    }

    public function surat_lampiran(Request $request)
    {
        $nomor_surat = $request->nomor_surat;
        $kode_wilayah = $request->kode_wilayah;

        $kode_kab = substr($kode_wilayah, 2, 2);
        $kode_kec = substr($kode_wilayah, 4, 3);
        $kode_desa = substr($kode_wilayah, 7, 3);
        $nbs = substr($kode_wilayah, 10, 4);

        $data = DsrtDikirim::where('nomor_surat', $nomor_surat)
            ->where('kode_kab', $kode_kab)
            ->where('kode_kec', $kode_kec)
            ->where('kode_desa', $kode_desa)
            ->where('nbs', $nbs)
            ->get();

        $data_kab = Kab::where('kode_kab', $kode_kab)->first();
        $data_kec = Kec::where('kode_kab', $kode_kab)->where('kode_kec', $kode_kec)->first();
        $data_desa = Desa::where('kode_kab', $kode_kab)->where('kode_kec', $kode_kec)->where('kode_desa', $kode_desa)->first();

        $data_dsrt = [];

        foreach ($data as $item) {
            # code...
            array_push($data_dsrt, $item);
        }

        $data_pdf = [
            'data' => $data_dsrt,
            'nomor_surat' => $nomor_surat,
            'data_kab' => $data_kab,
            'data_kec' => $data_kec,
            'data_desa' => $data_desa,
            'nbs' => $nbs,
        ];


        $pdf = FacadePdf::loadView('lampiran_pdf', $data_pdf);
        return $pdf->download('lampiran-'.$kode_wilayah.'-'.$nomor_surat.'.pdf');
    }

    public function get_kecs(Request $request)
    {
        $val = $request->validate([
            'kode_kab' => ['required'],
        ]);

        if ($val) {
            $data_kecs = Kec::where('kode_kab', $request->kode_kab)->get();
            return ($data_kecs);
        }
    }

    public function get_desas(Request $request)
    {
        $val = $request->validate([
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
        ]);

        if ($val) {
            $data_desas = Desa::where('kode_kab', $request->kode_kab)->where('kode_kec', $request->kode_kec)->get();
            return ($data_desas);
        }
    }

    public function get_nbs(Request $request)
    {
        $val = $request->validate([
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
            'kode_desa' => ['required'],
        ]);

        if ($val) {
            $data_nbs = SampleDsrt::distinct()->where('kode_kab', $request->kode_kab)->where('kode_kec', $request->kode_kec)->where('kode_desa', $request->kode_desa)->get(['nbs']);
            return ($data_nbs);
        }
    }

    public function get_surat_db(Request $request)
    {
        $user = Auth::user();

        if ($user->kode_wilayah == '1600') {
            $data_surat = SuratPengiriman::all();
            return $data_surat;
        } else {
            $kode_kab = substr($user->kode_wilayah, 2, 2);
            $data_surat = SuratPengiriman::where('kode_kab', $kode_kab)->get();
            return $data_surat;
        }
    }

    public function input_from_api(Request $request)
    {
        $response_api = Http::get('http://sipmen.bps.go.id/api1600/');
        if ($response_api->json()) {
            $response_json =  $response_api->json();
            $data_surat_api = $response_json['data'];

            foreach ($data_surat_api as $surat) {
                # code...
                try {
                    SuratPengiriman::updateOrCreate(
                        [
                            'kode_prov' => $surat['kd_prop'],
                            'kode_kab' => $surat['kd_kab'],
                            'kode_kec' => $surat['kd_kec'],
                            'kode_desa' => $surat['kd_desa'],
                            'nbs' => $surat['kd_sls'],
                        ],
                        [
                            'nomor_surat' => $surat['no_surat_kirim_prop'],
                        ]
                    );
                } catch (Exception $e) {
                    return response()->json([
                        'error' => 'Whoops, looks like something went wrong.',
                        'debug' => $e->getMessage()
                    ]);
                }
            }
        } else {
            return response('failed');
        }
    }

    public function export_input_template(Request $request)
    {

        $val = $request->validate([
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
            'kode_desa' => ['required'],
            'nbs' => ['required'],
        ]);

        if ($val) {
            $kode_kab = $request->kode_kab;
            $kode_kec = $request->kode_kec;
            $kode_desa = $request->kode_desa;
            $nbs = $request->nbs;

            $kode_bs_full = '16' . $kode_kab . $kode_kec . $kode_desa . $nbs;

            if ($kode_kab == null) {
                $kode_kab = '';
            }
            if ($kode_kec == null) {
                $kode_kec = '';
            }
            if ($kode_desa == null) {
                $kode_desa = '';
            }
            if ($nbs == null) {
                $nbs = '';
            }

            $export = new TemplateInputExport($kode_kab, $kode_kec, $kode_desa, $nbs);
            return Excel::download($export, 'template_input_' . $kode_bs_full . '.xlsx');
        }
    }

    public function submit_template(Request $request)
    {
        $request->validate([
            'file_template' => ['required', 'mimes:csv,xlsx,xls'],
            'kode_prov' => ['required'],
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
            'kode_desa' => ['required'],
            'nbs' => ['required'],
            'nomor_surat' => ['required'],
        ]);


        $file = $request->file('file_template');
        $nama_file_import = rand() . "_" . $file->getClientOriginalName();
        $file->move('import/dsrt', $nama_file_import);
        $import_dsrt = new InputDsrtImport;
        Excel::import($import_dsrt, public_path("/import/dsrt/" . $nama_file_import));
        $data_input_dsrt = $import_dsrt->get_input_dsrt();

        $total_input_dsrt = 0;
        foreach ($data_input_dsrt as $rt) {
            try {
                $dsrt = DsrtDikirim::updateOrCreate(
                    [
                        'kode_prov' => $request->kode_prov,
                        'kode_kab' => $request->kode_kab,
                        'kode_kec' => $request->kode_kec,
                        'kode_desa' => $request->kode_desa,
                        'nbs' => $request->nbs,
                        'no_dsrt' => (int)$rt['no_dsrt'],
                        'nus' => (int)$rt['nus'],
                    ],
                    [
                        'nomor_surat' => $request->nomor_surat,
                        'nama_sls' => $rt['nama_sls'],
                        'nama_krt' => $rt['nama_krt'],
                        'status_dikirim' => (int)$rt['status_dikirim'],
                        'status_response' => (int)$rt['status_response'],
                    ]
                );

                if($dsrt){
                    $affected_row = 1;
                } else {
                    $affected_row = 0;
                }

                $total_input_dsrt += $affected_row;

            } catch (Exception $e) {
                return response()->json([
                    'error' => 'Whoops, looks like something went wrong.',
                    'debug' => $e->getMessage()
                ]);
            }
        }

        $error_import = count($data_input_dsrt) - $total_input_dsrt;

        if ($error_import > 0) {
            return redirect()->back()
                ->with("success", "Sejumlah " . $total_input_dsrt . " RT berhasil diinput")
                ->with("error", "Sejumlah " . $error_import . " RT gagal diinput");
        }

        return redirect()->back()->with("success", "Sejumlah " . $total_input_dsrt . " RT berhasil diinput");
    }
}
