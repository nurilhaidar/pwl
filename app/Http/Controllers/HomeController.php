<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function index()
    {
        return view("beranda");
    }

    public function profile()
    {
        return view("profile");
    }

    public function sekolah()
    {
        return view("sekolah");
    }

    public function kuliah()
    {
        return view("kuliah");
    }
}
