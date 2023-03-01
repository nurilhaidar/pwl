@extends("layouts.templates")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Diri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                        <li class="breadcrumb-item active">Data Diri</li>
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
                    <h3 class="card-title">Biodata</h3>
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
                    <h3 class="profile-username text-center">Mukhammad Nuril Haidar</h3>
                    <p class="text-muted text-center">2141720208</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>TTL</b> <span class="float-right">Malang 5 Mei 2003</span>
                        </li>
                        <li class="list-group-item">
                            <b>Agama</b> <span class="float-right">Islam</span>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <span class="float-right">Jalan Pisang Candi Barat 15 Malang</span>
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