<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $data = Matkul::all();
        return view('matkul-table')->with('datas', $data);
    }
}
