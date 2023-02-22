<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang";
    }

    public function about()
    {
        echo "NIM : 2141720208" . "<br>\n";
        echo "Nama : Mukhammad Nuril Haidar";
    }

    public function articles($id)
    {
        echo 'Halaman Artikel dengan ID $id';
    }
}
