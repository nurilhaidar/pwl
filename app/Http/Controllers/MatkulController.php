<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matkul::all();
        return view('matkul.matkul')->with('matkul', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create_matkul')->with('url_form', url('/matkul'));
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
            'id_matkul' => 'required|string|max:10|unique:matkul,id_matkul',
            'nama' => 'required|string|max:50',
            'sks' => 'required|int|max:11',
        ]);

        $data = Matkul::create($request->except(['_token']));
        return redirect('matkul')->with('success', 'Matkul Berhasil Ditambahkan');
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
        $data = Matkul::find($id);
        return view('matkul.create_matkul')
            ->with('matkul', $data)
            ->with('url_form', url('matkul/' . $id));
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
            'id_matkul' => 'required|string|max:10|unique:matkul,id_matkul,' . $id . ',id_matkul',
            'nama' => 'required|string|max:50',
            'sks' => 'required|int|max:11',
        ]);

        $data = Matkul::where('id_matkul', '=', $id)->update($request->except(['_method', '_token']));
        return redirect('matkul')->with('success', 'Matkul berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matkul::where('id_matkul', '=', $id)->delete();
        return redirect('matkul')->with('success', 'Matkul Berhasil Dihapus');
    }
}
