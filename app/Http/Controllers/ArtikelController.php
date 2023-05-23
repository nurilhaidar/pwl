<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::all();
        return view('artikel.artikel-table')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create_artikel')->with('url_form', url('/artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request -> file('image')){
            $image_name = $request->file('image')->store('image', 'public');
        }

        Artikel::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $image_name,
        ]);

        return redirect('artikel');
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
        $data = Artikel::find($id);
        return view('artikel.create_artikel')->with('data', $data)->with('url_form', url('artikel/'.$id));
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
        $article = Artikel::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if($article->img && file_exists(storage_path('app/public/'.$article->img))){
            Storage::delete('public/'.$article->img);
        }

        $image_name = $request->file('image')->store('image', 'public');
        $article->img = $image_name;

        $article->save();

        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artikel::find($id);
        Storage::delete('public/'.$data->img);
        Artikel::where('id', $id)->delete();
        return redirect('artikel');
    }

    public function cetak(){
        $artikel = Artikel::all();
        $pdf = PDF::loadview('artikel.artikel-pdf', ['artikel'=>$artikel]);
        return $pdf->stream();
    }
}
    