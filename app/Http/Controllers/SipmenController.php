<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\DsrtDikirim;
use App\Models\Kab;
use App\Models\Kec;
use App\Models\SampleDsrt;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;

use function PHPSTORM_META\type;
use PDF;

class SipmenController extends Controller
{
    //
    public function input(Request $request)
    {
        // try {
        //     $response_api = Http::get('http://sipmen.bps.go.id/api1600');
        //     if ($response_api->json()) {
                return view('pages/input');
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
                $kode_kab = substr($user->kode_wilayah, 2,2);
                $response_api = Http::get('http://sipmen.bps.go.id/api1600/'.$kode_kab);
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
        
        $kode_kab = substr($kode_wilayah,2,2);
        $kode_kec = substr($kode_wilayah,4,3);
        $kode_desa = substr($kode_wilayah,7,3);
        $nbs = substr($kode_wilayah,10,4);
        
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
        return $pdf->download('laporan-pdf.pdf');
    }

    public function get_kecs(Request $request){
        $val = $request->validate([
            'kode_kab' => ['required'],
        ]);

        if($val){
            $data_kecs = Kec::where('kode_kab', $request->kode_kab)->get();
            return ($data_kecs);
        }
    }

    public function get_desas(Request $request){
        $val = $request->validate([
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
        ]);

        if($val){
            $data_desas = Desa::where('kode_kab', $request->kode_kab)->where('kode_kec', $request->kode_kec)->get();
            return ($data_desas);
        }
    }

    public function get_nbs(Request $request){
        $val = $request->validate([
            'kode_kab' => ['required'],
            'kode_kec' => ['required'],
            'kode_desa' => ['required'],
        ]);

        if($val){
            $data_nbs = SampleDsrt::distinct()->where('kode_kab', $request->kode_kab)->where('kode_kec', $request->kode_kec)->where('kode_desa', $request->kode_desa)->get(['nbs']);
            return ($data_nbs);
        }
    }


}
