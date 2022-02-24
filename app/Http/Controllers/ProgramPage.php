<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramPage extends Controller
{
    public function prg1(){
        return "Selamat Datang Di Program Karir!";
    }

    public function prg2(){
        return "Selamat Datang Di Program Magang!";
    }

    public function prg3(){
        return "Selamat Datang Di Program Kunjungan Industri!";
    }
}
