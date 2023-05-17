@extends('layouts.templates')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tabel Artikel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tabel Artikel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('artikel/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Artikel</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->content }}</td>
                                    <td><img src="/storage/{{ $d->img }}" width="100px"></td>
                                    <td>
                                        <div style="display: flex">
                                            <a href="{{ url('artikel/' . $d->id . '/edit') }}" class="btn btn-warning"
                                                style="margin-right: 5px">Edit</a>
                                            <form method="POST" action="{{ url('artikel/' . $d->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-header -->
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
