@extends('layouts.templates')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Artikel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Artikel</li>
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
                    <form action="{{ $url_form }}" method="post" enctype="multipart/form-data">
                        {!! isset($data) ? method_field('PUT') : '' !!}
                        @csrf
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" class="form-control" required="required" name="title"
                                value="{{ isset($data) ? $data->title : old('title') }}"></br>

                            <label for="content">Content: </label>
                            <input type="text" class="form-control" required="required" name="content"
                                value="{{ isset($data) ? $data->content : old('title') }}"></input></br>

                            <label for="image">Feature Image: </label>
                            <input type="file" class="form-control" required="required" name="image"
                                value="{{ isset($data) ? $data->img : old('title') }}"></br>

                            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>

                            @if (isset($data))
                                <label for="selected-image">Foto</label><br>
                                <img name="selected-image" src="/storage/{{ $data->img }}" width="70px">
                            @endif
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
