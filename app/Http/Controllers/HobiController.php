<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hobi::all();
        return view('hobi.hobi')->with('hobi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create_hobi')->with('url_form', url('/hobi'));
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
            'id_hobi' => 'required|string|max:10|unique:hobi,id_hobi',
            'nama' => 'required|string|max:50',
        ]);

        $data = Hobi::create($request->except(['_token']));
        return redirect('hobi')->with('success', 'Hobi Berhasil Ditambahkan');
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
        $data = Hobi::find($id);
        return view('hobi.create_hobi')
            ->with('hobi', $data)
            ->with('url_form', url('hobi/' . $id));
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
            'id_hobi' => 'required|string|max:10|unique:hobi,id_hobi,' . $id . ',id_hobi',
            'nama' => 'required|string|max:10'
        ]);

        $data = Hobi::where('id_hobi', '=', $id)->update($request->except(['_method', '_token']));
        return redirect('hobi')->with('success', 'Hobi berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hobi::where('id_hobi', '=', $id)->delete();
        return redirect('hobi')->with('success', 'Hobi Berhasil Dihapus');
    }
}
