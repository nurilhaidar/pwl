@extends("layouts.templates")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Hobi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                        <li class="breadcrumb-item active">Tabel Hobi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{url('matkul/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($matkul->count() > 0)
                        @foreach($matkul as $i => $m)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$m->id_matkul}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->sks}}</td>
                            <td>
                                <a href="{{ url('/matkul/'. $m->id_matkul.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ url('/matkul/'.$m->id_matkul) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection