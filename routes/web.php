<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('dashboard');
});*/

//sample routes
//Route::get('/', [HomeController::class, 'index'])->name('index');

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/tentang-kami', 'tentang_kami')->name('tentang_kami');
        Route::get('/tentang-kami/struktur-organisasi', 'struktur_organisasi')->name('struktur_organisasi');
        Route::get('/tentang-kami/tugas-pokok-dan-fungsi', 'tugas_pokok_dan_fungsi')->name('tugas_pokok_dan_fungsi');
        Route::get('/tentang-kami/sekretariat', 'sekretariat')->name('sekretariat');
        Route::get('/tentang-kami/bidang-2', 'bidang_2')->name('bidang_2');
    Route::get('/visi-dan-misi', 'visi_dan_misi')->name('visi_dan_misi');
    Route::get('/strategi-marketing', 'strategi_marketing')->name('strategi_marketing');
        Route::get('/strategi-marketing/profil-reformer', 'profil_reformer')->name('profil_reformer');
        Route::get('/strategi-marketing/proper', 'proper')->name('proper');
        Route::get('/strategi-marketing/rpp-salawaku', 'rpp_salawaku')->name('rpp_salawaku');
        Route::get('/strategi-marketing/ppt', 'ppt')->name('ppt');
        Route::get('/strategi-marketing/timeline', 'timeline')->name('timeline');
        Route::get('/strategi-marketing/nilai-sikap-perilaku', 'nilai_sikap_perilaku')->name('nilai_sikap_perilaku');
    Route::get('/data-kabupaten-kota', 'data_kabupaten_kota')->name('data_kabupaten_kota');
        Route::get('/panel-harga-pangan/kota-ternate', 'panel_ternate')->name('panel_ternate');
        Route::get('/fsva-peta-kerawanan-pangan/kota-ternate', 'fsva_ternate')->name('fsva_ternate');
        Route::get('/neraca-bahan-makanan/kota-ternate', 'neraca_ternate')->name('neraca_ternate');
        Route::get('/panel-harga-pangan/halmahera-tengah', 'panel_halteng')->name('panel_halteng');
        Route::get('/fsva-peta-kerawanan-pangan/halmahera-tengah', 'fsva_halteng')->name('fsva_halteng');
        Route::get('/neraca-bahan-makanan/halmahera-tengah', 'neraca_halteng')->name('neraca_halteng');
    Route::get('/publikasi-dan-informasi', 'publikasi_dan_informasi')->name('publikasi_dan_informasi');
        Route::get('/publikasi-dan-informasi/kedai-pangan', 'pub_kedai_pangan')->name('pub_kedai_pangan');
        Route::get('/publikasi-dan-informasi/dinas-pangan', 'pub_dinas_pangan')->name('pub_dinas_pangan');
    Route::get('/hasil', 'hasil')->name('hasil');
        Route::get('/hasil/dokumen', 'hasil_dokumen')->name('hasil_dokumen');
        Route::get('/hasil/video', 'hasil_video')->name('hasil_video');
        Route::get('/hasil/foto', 'hasil_foto')->name('hasil_foto');



});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/dashboard', 'dashboard');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// authentication reference
https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/
