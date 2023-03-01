<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function home()
    {
        return view("news");

        echo "<ul><a href=''>Pilihan 1</a></ul>";
    }
}
