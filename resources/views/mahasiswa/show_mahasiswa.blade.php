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
                <form action="#" method="GET">
                    @csrf
                    {!! isset($mhs)? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" type="text" name="nim" value="{{$mhs->nim}}" disabled>
                        @error('nim')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{$mhs->nama}}" disabled>
                        @error('nama')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input class="form-control" type="text" name="kelas" value="{{$mhs->kelas->nama_kelas}}" disabled>
                        @error('kelas')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input class="form-control" type="text" name="jk" value="{{$mhs->jk}}" disabled>
                        @error('jk')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{$mhs->tempat_lahir}}" disabled>
                        @error('tempat_lahir')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tanggal_lahir" value="{{$mhs->tanggal_lahir}}" disabled>
                        @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{$mhs->alamat}}" disabled>
                        @error('alamat')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input class="form-control" type="text" name="hp" value="{{$mhs->hp}}" disabled>
                        @error('hp')
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
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