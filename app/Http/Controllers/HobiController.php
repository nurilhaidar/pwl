<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        $data = Hobi::all();
        return view('hobi-table')->with('datas', $data);
    }
}
