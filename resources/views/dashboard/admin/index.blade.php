@extends('layouts.admin')
@section('content')

<div class="card-body">
    <div class="h1 text-center font-weight-bold font-italic">Selamat Datang, {{ auth()->guard('admin')->user()->name }}</div>
</div>
<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Pengaduan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['belum_verifikasi'] }} pengaduan belum diverifikasi
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            Pengaduan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['belum_tanggapi'] }} pengaduan belum ditanggapi
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pengaduan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['selesai_tanggapi'] }} pengaduan sudah ditanggapi
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Masyarakat
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['jumlah_masyarakat'] }} user masyarakat
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Petugas
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['jumlah_petugas'] }} user petugas
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Admin
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            Ada {{ $data['jumlah_admin'] }} user admin
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-secret fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
