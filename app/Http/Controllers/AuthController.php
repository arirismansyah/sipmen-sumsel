<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    //
    public function index()
    {

        // try {
        //     $response_api = Http::get('http://sipmen.bps.go.id/api1600');
        //     if ($response_api->json()) {
                return view('pages/login');
        //     } else {
        //         return view('pages/vpn_warning');
        //     }
        // } catch (\Throwable $th) {
        //     return view('pages/vpn_warning');
        // }

    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credential)) {
            # code...
            return redirect()->intended('home');
        } else {
            return back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login')->with('success', 'Berhasil logout.');
    }

    public function assign(){
        try {
            $response_api = Http::get('http://sipmen.bps.go.id/api1600');
            if ($response_api->json()) {
            return $response_api;
                } else {
                    return $response_api;
                }
            } catch (\Throwable $th) {
                return ($th);
            }
    }
}
