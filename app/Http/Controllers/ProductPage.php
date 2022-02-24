<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPage extends Controller
{
    public function prd1(){
        return "Selamat Datang Di Produk Marbel Edu Games!";
    }

    public function prd2(){
        return "Selamat Datang Di Produk Marbel & Friends Kids Games!";
    }

    public function prd3(){
        return "Selamat Datang Di Produk Riri Story Books!";
    }

    public function prd4(){
        return "Selamat Datang Di Produk Kolak Kids Songs!";
    }
}
