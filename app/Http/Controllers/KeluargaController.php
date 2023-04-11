<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Keluarga::all();
        return view('keluarga.keluarga')->with('klrg', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.create_keluarga')->with('url_form', url('/keluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_keluarga' => 'required|string|max:10|unique:keluarga,id_keluarga',
            'nama_keluarga' => 'required|string|max:50',
            'hubungan' => 'required|string|max:50',
        ]);

        $data = Keluarga::create($request->except(['_token']));
        return redirect('keluarga')->with('success', 'Keluarga Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Keluarga::find($id);
        return view('keluarga.create_keluarga')
            ->with('klrg', $data)
            ->with('url_form', url('keluarga/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_keluarga' => 'required|string|max:10|unique:keluarga,id_keluarga,' . $id . ',id_keluarga',
            'nama_keluarga' => 'required|string|max:50',
            'hubungan' => 'required|string|max:50',
        ]);

        $data = Keluarga::where('id_keluarga', '=', $id)->update($request->except(['_method', '_token']));
        return redirect('keluarga')->with('success', 'Keluarga berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keluarga::where('id_keluarga', '=', $id)->delete();
        return redirect('keluarga')->with('success', 'Keluarga Berhasil Dihapus');
    }
}
