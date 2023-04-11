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
                    {!! isset($mhs)? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control @error('nim') is-invalid @enderror" type="text" name="nim" value="{{ isset($mhs)? $mhs->nim : old('nim') }}">
                        @error('nim')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{isset ($mhs)? $mhs -> nama : old('nama')}}">
                        @error('nama')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input class="form-control @error('jk') is-invalid @enderror" type="text" name="jk" value="{{isset ($mhs)? $mhs -> jk : old('jk')}}">
                        @error('jk')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text" name="tempat_lahir" value="{{isset ($mhs)? $mhs -> tempat_lahir : old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" name="tanggal_lahir" value="{{isset ($mhs)? $mhs -> tanggal_lahir : old('tanggal_lahir')}}">
                        @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" value="{{isset ($mhs)? $mhs -> alamat : old('alamat')}}">
                        @error('alamat')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input class="form-control @error('hp') is-invalid @enderror" type="text" name="hp" value="{{isset ($mhs)? $mhs -> hp : old('hp')}}">
                        @error('hp')
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