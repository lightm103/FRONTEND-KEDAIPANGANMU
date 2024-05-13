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
        return view('beranda');
    }

    public function tentang_kami()
    {
        return view('tentang_kami');
    }

    public function visi_misi()
    {
        return view('visi_misi');
    }
}