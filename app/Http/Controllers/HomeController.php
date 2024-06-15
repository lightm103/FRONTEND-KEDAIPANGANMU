<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function beranda()
    {
        // kode untuk halaman beranda
        return view('beranda');
    }

    public function tentang_kami()
    {
        // kode untuk halaman tentang kami
        $data['title'] = 'Tentang Kami';
        return view('tentang-kami.tentang-kami', $data);
    }
    
    public function struktur_organisasi()
    {
        // kode untuk halaman struktur organisasi
        $data['title'] = 'Struktur Organisasi';
        return view('tentang-kami.struktur-organisasi', $data);
    }
    
    public function tugas_pokok_dan_fungsi()
    {
        // kode untuk halaman tugas pokok dan fungsi
        $data['title'] = 'Tugas Pokok dan Fungsi';
        return view('tentang-kami.tugas-pokok-dan-fungsi', $data);
    }
    
    public function sekretariat()
    {
        // kode untuk halaman sekretariat
        $data['title'] = 'Sekretariat';
        return view('tentang-kami.sekretariat', $data);
    }
    
    public function bidang_2()
    {
        // kode untuk halaman bidang 2
        $data['title'] = 'Bidang 2';
        return view('tentang-kami.bidang-2', $data);
    }
    
    public function visi_dan_misi()
    {
        // kode untuk halaman visi dan misi
        $data['title'] = 'Visi Dan Misi';
        return view('visi-dan-misi', $data);
    }
    
    public function strategi_marketing()
    {
        // kode untuk halaman strategi marketing
        $data['title'] = 'Strategi Marketing';
        return view('strategi-marketing.strategi-marketing', $data);
    }
    
    public function profil_reformer()
    {
        // kode untuk halaman profil reformer
        $data['title'] = 'Profil Reformer';
        return view('strategi-marketing.profil-reformer', $data);
    }
    
    public function proper()
    {
        // kode untuk halaman proper
        $data['title'] = 'Proper';
        return view('strategi-marketing.proper', $data);
    }
    
    public function rpp_salawaku()
    {
        // kode untuk halaman rpp salawaku
        $data['title'] = 'RPP Salawaku';
        return view('strategi-marketing.rpp-salawaku', $data);
    }
    
    public function ppt()
    {
        // kode untuk halaman ppt
        $data['title'] = 'PPT';
        return view('strategi-marketing.ppt', $data);
    }
    
    public function timeline()
    {
        // kode untuk halaman timeline
        $data['title'] = 'Timeline';
        return view('strategi-marketing.timeline', $data);
    }
    
    public function nilai_sikap_perilaku()
    {
        // kode untuk halaman nilai sikap perilaku
        $data['title'] = 'Nilai Sikap Perilaku';
        return view('strategi-marketing.nilai-sikap-perilaku', $data);
    }
    
    public function data_kabupaten_kota()
    {
        // kode untuk halaman data kabupaten kota
        $data['title'] = 'Data Kabupaten Kota';
        return view('data-kabupaten-kota.data-kabupaten-kota', $data);
    }
    
    public function panel_harga_pangan()
    {
        // kode untuk halaman panel harga pangan
        $data['title'] = 'Panel Harga Pangan';
        return view('data-kabupaten-kota.panel-harga-pangan', $data);
    }
    
    public function fsva_ternate()
    {
        // kode untuk halaman fsva peta kerawanan pangan
        $data['title'] = 'FSVA Peta Kerawanan Pangan';
        return view('data-kabupaten-kota.fsva-peta-kerawanan-pangan', $data);
    }
    
    public function neraca_ternate()
    {
        // kode untuk halaman neraca bahan makanan
        $data['title'] = 'Neraca Bahan Makanan';
        return view('data-kabupaten-kota.neraca-bahan-makanan', $data);
    }
    
    
    public function publikasi_dan_informasi()
    {
        // kode untuk halaman publikasi dan informasi
        $data['title'] = 'Publikasi dan Informasi';
        return view('publikasi-dan-informasi.publikasi-dan-informasi', $data);
    }
    
    public function pub_kedai_pangan()
    {
        // kode untuk halaman publikasi kedai pangan
        $data['title'] = 'Publikasi Kedai Pangan';
        return view('publikasi-dan-informasi.kedai-pangan', $data);
    }
    
    public function pub_dinas_pangan()
    {
        // kode untuk halaman publikasi dinas pangan
        $data['title'] = 'Publikasi Dinas Pangan';
        return view('publikasi-dan-informasi.dinas-pangan', $data);
    }
    
    public function hasil()
    {
        // kode untuk halaman hasil
        $data['title'] = 'Hasil';
        return view('hasil', $data);
    }
    
    public function hasil_dokumen()
    {
        // kode untuk halaman hasil dokumen
        $data['title'] = 'Hasil Dokumen';
        return view('hasil.dokumen', $data);
    }
    
    public function hasil_foto()
    {
        // kode untuk halaman hasil foto
        $data['title'] = 'Hasil Foto';
        return view('hasil.foto', $data);
    }
    
    public function hasil_video()
    {
        // kode untuk halaman hasil vidio
        $data['title'] = 'Hasil Video';
        return view('hasil.vidio', $data);
    }
    
    
}