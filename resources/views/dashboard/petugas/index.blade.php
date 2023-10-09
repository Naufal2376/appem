@extends('layouts.petugas')
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
                            Ada {{ $data }} pengaduan belum diverifikasi
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-5x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
