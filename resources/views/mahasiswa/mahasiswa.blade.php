@extends('layouts.templates')
@section('content')
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
                    <a data-target="#modal_mahasiswa" data-toggle="modal" class="btn btn-sm btn-success my-2">Tambah
                        Data</a>
                    <table class="table table-bordered table-striped" id="data_mahasiswa">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>JK</th>
                                <th>HP</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <select name="id_kelas" id="kelas" class="form-control form-control-sm">
                                    <option>Pilih Kelas</option>
                                    @foreach ($kelas as $a)
                                        <option value="{{ $a->id }}">{{ $a->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="jk" name="jk"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">No Hp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir"
                                    name="tempat_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir"
                                    name="tanggal_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" id="img" name="img" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('custom_js')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #jk').val($(th).data('jk'));
            $('#modal_mahasiswa #img').val($(th).data('img'));
            $('#modal_mahasiswa #kelas').val($(th).data('kelas'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function showData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Detail Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim')).prop('disabled', true);
            $('#modal_mahasiswa #nama').val($(th).data('nama')).prop('disabled', true);
            $('#modal_mahasiswa #hp').val($(th).data('hp')).prop('disabled', true);
            $('#modal_mahasiswa #jk').val($(th).data('jk')).prop('disabled', true);;
            $('#modal_mahasiswa #kelas').val($(th).data('kelas')).prop('disabled', true);;
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir')).prop('disabled', true);;
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir')).prop('disabled', true);;
            $('#modal_mahasiswa #alamat').val($(th).data('alamat')).prop('disabled', true);;
        }

        $(document).ready(function() {
            var dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'id_kelas',
                        name: 'kelas',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'jk',
                        name: 'jk',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'hp',
                        name: 'hp',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'tempat_lahir',
                        name: 'tempat_lahir',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'tanggal_lahir',
                        name: 'tanggal_lahir',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'alamat',
                        name: 'alamat',
                        sortable: true,
                        searchable: true
                    },
                    {
                        data: 'img',
                        name: 'foto',
                        sortable: true,
                        searchable: true,
                        render: function(data, type, row) {
                            if (type === 'display' && data) {
                                return '<img src="storage/' + data +
                                    '" alt="Image" width="100" height="100">';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var btn =
                                `<div style="display: flex"><button data-url="{{ url('/mahasiswa') }}/` +
                                data +
                                `" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="` +
                                row.id + `" data-nim="` + row.nim + `" data-nama="` + row.nama +
                                `" data-hp="` + row.hp + `" data-kelas="` + row.id_kelas +
                                `" data-jk="` + row.jk +
                                `" data-tempat_lahir="` + row.tempat_lahir +
                                `" data-tanggal_lahir="` + row.tanggal_lahir +
                                `" data-alamat="` + row.alamat + '"' +
                                `><i class="fa fa-edit"></i> Edit</button>` +

                                `<a class="btn btn-xs btn-info class="btn btn-xs btn-warning" onclick="showData(this)" data-id="` +
                                row.id + `" data-nim="` + row.nim + `" data-nama="` + row.nama +
                                `" data-hp="` + row.hp + `" data-kelas="` + row.id_kelas +
                                `" data-jk="` + row.jk +
                                `" data-tempat_lahir="` + row.tempat_lahir +
                                `" data-tanggal_lahir="` + row.tanggal_lahir +
                                `" data-alamat="` + row.alamat + '"' +
                                `""><i class="fa fa-list"></i> Detail</a>` +

                                `<form method="POST" action="{{ url('/mahasiswa') }}/` + row.id + `">
                                @csrf @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                    </form> </div>`;
                            return btn;
                        }
                    },
                ]
            });

            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data
                                .message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message +
                                '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endpush
