@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Detail Pengaduan</div>
    <div class="card-body">
        <a href="{{ route('data_pengaduan') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        <br><br>
        <form action="{{ route('detail_pengaduan', $data->id_pengaduan) }}" method="GET">
            @csrf
            <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="text" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{ $data->tgl_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="{{ $data->masyarakat->nik }}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $data->masyarakat->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                <input type="text" class="form-control" name="isi_pengaduan" id="isi_pengaduan" value="{{ $data->isi_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                <img src="{{ asset('asset/foto') }}/{{ $data->foto }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="{{ $data->status }}" readonly>
            </div>
        </form>
    </div>
</div>

@endsection
