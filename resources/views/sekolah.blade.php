@extends("layouts.templates")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Riwayat Sekolah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                        <li class="breadcrumb-item active">Riwayat Sekolah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="centering">
            <div class="card col-md-5">
                <div class="card-header">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body box-profile">
                    <h3 class="profile-username text-center">Riwayat Sekolah</h3>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>SD</b> <span class="float-right">SDN BARENG 3 MALANG</span>
                        </li>
                        <li class="list-group-item">
                            <b>SMP</b> <span class="float-right">SMPN 1 MALANG</span>
                        </li>
                        <li class="list-group-item">
                            <b>SMK</b> <span class="float-right">SMK TELKOM MALANG</span>
                        </li>
                        <li class="list-group-item">
                            <b>D4</b> <span class="float-right">POLITEKNIK NEGERI MALANG</span>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push("custom_css")
<style>
    .centering {
        display: flex;
        justify-content: center;
    }
</style>
@endpush

@push("custom_js")
@endpush