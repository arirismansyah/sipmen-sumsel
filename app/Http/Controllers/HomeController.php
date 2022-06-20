<?php

namespace App\Http\Controllers;

use App\Models\DsrtDikirim;
use App\Models\Kab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {


        // try {
        //     $response_api = Http::get('http://sipmen.bps.go.id/api1600');
        //     if ($response_api->json()) {

                $user = Auth::user();

                if ($user->kode_wilayah == '1600') {
                    $data_kab = Kab::all();
                    $kode_kab = $request->kode_kab;
                    $kode_kec = $request->kode_kec;
                    $kode_desa = $request->kode_desa;
                    $nbs = $request->nbs;
                    $keyword = $request->nomor_surat;



                    $data_dsrt_dikirim = DsrtDikirim::select(
                        "nomor_surat",
                        "kode_prov",
                        "kode_kab",
                        "kode_kec",
                        "kode_desa",
                        "nbs",
                        DB::raw("SUM(status_dikirim) as jml_dikirim"),
                        DB::raw("SUM(status_response) as jml_response")
                    )
                        ->where('kode_kab', 'LIKE', '%' . $kode_kab . '%')
                        ->where('kode_kec', 'LIKE', '%' . $kode_kec . '%')
                        ->where('kode_desa', 'LIKE', '%' . $kode_desa . '%')
                        ->where('nbs', 'LIKE', '%' . $nbs . '%')
                        ->where('nomor_surat', 'LIKE', '%' . $keyword . '%')
                        ->groupBy('nomor_surat')->paginate(10);
                } else {
                    $kode_kab = substr($user->kode_wilayah,2,2);
                    $data_kab = Kab::where('kode_kab', $kode_kab)->get();
                    $kode_kec = $request->kode_kec;
                    $kode_desa = $request->kode_desa;
                    $nbs = $request->nbs;
                    $keyword = $request->nomor_surat;



                    $data_dsrt_dikirim = DsrtDikirim::select(
                        "nomor_surat",
                        "kode_prov",
                        "kode_kab",
                        "kode_kec",
                        "kode_desa",
                        "nbs",
                        DB::raw("SUM(status_dikirim) as jml_dikirim"),
                        DB::raw("SUM(status_response) as jml_response")
                    )
                        ->where('kode_kab', 'LIKE', '%' . $kode_kab . '%')
                        ->where('kode_kec', 'LIKE', '%' . $kode_kec . '%')
                        ->where('kode_desa', 'LIKE', '%' . $kode_desa . '%')
                        ->where('nbs', 'LIKE', '%' . $nbs . '%')
                        ->where('nomor_surat', 'LIKE', '%' . $keyword . '%')
                        ->groupBy('kode_kec')
                        ->groupBy('kode_desa')
                        ->groupBy('nbs')
                        ->groupBy('nomor_surat')
                        ->paginate(10);
                }


                $data_dsrt_dikirim->appends($request->all());

                return view('pages/home', compact('data_dsrt_dikirim', 'data_kab', 'kode_kab', 'kode_kec', 'kode_desa', 'keyword'));
        //     } else {
        //         return view('pages/vpn_warning');
        //     }
        // } catch (\Throwable $th) {
        //     return view('pages/vpn_warning');
        // }
    }
}
