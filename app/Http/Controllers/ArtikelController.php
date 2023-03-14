<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $query = Artikel::all();
        return view("artikel-table")->with('data', $query);
    }
}
