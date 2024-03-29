<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
use Storage;
use Yajra\DataTables\DataTables;

use function PHPUnit\Framework\fileExists;

class MahasiswaController extends Controller
{
    public function data()
    {
        $data = Mahasiswa::all();
        $kelas = Kelas::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswa = Mahasiswa::with('kelas')->get();
        // $paginate = Mahasiswa::orderBy('id', 'desc')->paginate(3);
        // return view('mahasiswa.mahasiswa', ['mhs' => $mahasiswa, 'paginate' => $paginate]);
        $kelas = Kelas::all();
        return view('mahasiswa.mahasiswa')->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas])->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mahasiswa = new Mahasiswa;
        // $request->validate([
        //     'nim' => 'required|string|max:10|unique:mahasiswa,nim',
        //     'nama' => 'required|string|max:50',
        //     'id_kelas' => 'required|string',
        //     'jk' => 'required|in:l,p',
        //     'tempat_lahir' => 'required|string|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'alamat' => 'required|string|max:255',
        //     'hp' => 'required|digits_between:6,15',
        //     'img' => 'required|file',
        // ]);

        // if ($request->file('img')) {
        //     $image_name = $request->file('img')->store('mahasiswa', 'public');
        // }

        // $mahasiswa->nim = $request->get('nim');
        // $mahasiswa->nama = $request->get('nama');
        // $mahasiswa->jk = $request->get('jk');
        // $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        // $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        // $mahasiswa->alamat = $request->get('alamat');
        // $mahasiswa->hp = $request->get('hp');
        // $mahasiswa->img = $image_name;
        // $mahasiswa->save();

        // $kelas = new Kelas;
        // $kelas->id = $request->get('id_kelas');

        // $mahasiswa->kelas()->associate($kelas);
        // $mahasiswa->save();

        // return redirect('mahasiswa')->with('success', 'Berhasil');

        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'id_kelas' => 'required|string',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'img' => 'required|file',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $image_name = $request->file('img')->store('mahasiswa', 'public');
        $mhs = Mahasiswa::create($request->except('_token', '_method', 'img') + ['img' => $image_name]);
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);

        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.show_mahasiswa')->with('mhs', $mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('id', $id)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs', $mahasiswa)
            ->with('kelas', $kelas)
            ->with('url_form', url('/mahasiswa/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $mahasiswa = Mahasiswa::with('kelas')->where('id', $id)->first();

        // $request->validate([
        //     'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
        //     'nama' => 'required|string|max:50',
        //     'jk' => 'required|in:l,p',
        //     'tempat_lahir' => 'required|string|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'alamat' => 'required|string|max:255',
        //     'hp' => 'required|digits_between:6,15',
        //     'img' => 'file',
        // ]);

        // if ($request->file('img')) {
        //     if ($mahasiswa->img && fileExists(storage_path('app/public/' . $mahasiswa->img))) {
        //         Storage::delete('public/' . $mahasiswa->img);
        //     }
        //     $image_name = $request->file('img')->store('image', 'public');
        //     $mahasiswa->img = $image_name;
        // }

        // $mahasiswa->nim = $request->get('nim');
        // $mahasiswa->nama = $request->get('nama');
        // $mahasiswa->jk = $request->get('jk');
        // $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        // $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        // $mahasiswa->alamat = $request->get('alamat');
        // $mahasiswa->hp = $request->get('hp');
        // $mahasiswa->save();

        // $kelas = new Kelas;
        // $kelas->id = $request->get('id_kelas');

        // $mahasiswa->kelas()->associate($kelas);
        // $mahasiswa->save();

        // return redirect('mahasiswa')->with('success', 'Berhasil');
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'id_kelas' => 'required|string',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'img' => 'file',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        if ($request->file('img')) {
            $image_name = $request->file('img')->store('mahasiswa', 'public');
            $mhs = Mahasiswa::where('id', $id)->update($request->except('_token', '_method', 'img') + ['img' => $image_name]);
        }

        $mhs = Mahasiswa::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs) ? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::where('id', '=', $id)->first();
        if ($data->img == !null) {
            Storage::delete('public/' . $data->img);
        }
        $data->delete();
        return redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Di Hapus');
    }

    public function cetak($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('id', $id)->first();
        $pdf = PDF::loadView('mahasiswa.nilai_mahasiswa', ['data' => $mahasiswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }
}
