<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SipmenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/input', [SipmenController::class, 'input'])->name('input');
    Route::post('/get-sample-dsrt', [SipmenController::class, 'get_sample_dsrt'])->name('get-sample-dsrt');
    Route::post('/get-kecs', [SipmenController::class, 'get_kecs'])->name('get-kecs');
    Route::post('/get-desas', [SipmenController::class, 'get_desas'])->name('get-desas');
    Route::post('/get-nbs', [SipmenController::class, 'get_nbs'])->name('get-nbs');
    Route::post('/submit-dsrt', [SipmenController::class, 'input_dokumen_dikirim'])->name('submit-dsrt');
    Route::get('/lampiran', [SipmenController::class, 'surat_lampiran'])->name('lampiran');
    Route::get('/assign', [AuthController::class, 'assign'])->name('assign');
    Route::get('/get-surat', [SipmenController::class, 'input_from_api'])->name('get-surat');
    Route::get('/get-surat-db', [SipmenController::class, 'get_surat_db'])->name('get-surat-db');
    Route::get('/get-input-template', [SipmenController::class, 'export_input_template'])->name('get-input-template');
    Route::post('/submit-template', [SipmenController::class, 'submit_template'])->name('submit-template');
});

Route::get('/sync-sipmen-api', [SipmenController::class, 'sync_sipmen_api'])->name('sync-sipmen-api');