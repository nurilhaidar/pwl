@extends("layouts.templates")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tabel Mahasiswa</li>
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
                <form action="{{ $url_form }}" method="POST">
                    @csrf
                    {!! isset($matkul)? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label>ID Matkul</label>
                        <input class="form-control @error('id_matkul') is-invalid @enderror" type="text" name="id_matkul" value="{{ isset($matkul)? $matkul->id_matkul : old('id_matkul') }}">
                        @error('id_matkul')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ isset($matkul)? $matkul->nama : old('nama') }}">
                        @error('nama')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>SKS</label>
                        <input class="form-control @error('sks') is-invalid @enderror" type="text" name="sks" value="{{ isset($matkul)? $matkul->sks : old('sks') }}">
                        @error('sks')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection