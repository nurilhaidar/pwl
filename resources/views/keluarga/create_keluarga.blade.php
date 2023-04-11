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
                    {!! isset($klrg)? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label>ID Keluarga</label>
                        <input class="form-control @error('id_keluarga') is-invalid @enderror" type="text" name="id_keluarga" value="{{ isset($klrg)? $klrg->id_keluarga : old('id_keluarga') }}">
                        @error('id_keluarga')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Keluarga</label>
                        <input class="form-control @error('nama_keluarga') is-invalid @enderror" type="text" name="nama_keluarga" value="{{ isset($klrg)? $klrg->nama_keluarga : old('nama_keluarga') }}">
                        @error('nama_keluarga')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Hubungan</label>
                        <input class="form-control @error('hubungan') is-invalid @enderror" type="text" name="hubungan" value="{{ isset($klrg)? $klrg->hubungan : old('hubungan') }}">
                        @error('hubungan')
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