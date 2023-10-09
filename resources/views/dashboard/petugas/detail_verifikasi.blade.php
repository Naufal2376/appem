@extends('layouts.petugas')
@section('content')

<div class="card shadow">
    <div class="card-body">
        <form class="user" action="{{ route('simpan_verifikasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_pengaduan" value="{{ $data->id_pengaduan }}">
            <a href="{{ route('verifikasi_pengaduan') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-fw fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
            <button type="submit" class="btn btn-info btn-icon-split" onclick="return confirm('Yakin ingin proses data ini?')">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Proses</span>
            </button>
            <br>
            <br>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="{{ $data->nik }}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $data->masyarakat->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="text" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{ $data->tgl_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                <input type="text" class="form-control" name="isi_pengaduan" id="isi_pengaduan" value="{{ $data->isi_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                <img src="{{ asset('asset/foto') }}/{{ $data->foto }}">
            </div><br>
        </form>
    </div>
</div>

@endsection
