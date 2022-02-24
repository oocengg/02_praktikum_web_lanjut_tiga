<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function home() {
        return "Selamat Datang! Ini adalah Halaman Utama Perusahaan!";
    }
}
