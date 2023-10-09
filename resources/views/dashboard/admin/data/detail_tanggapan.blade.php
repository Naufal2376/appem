@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="card-body">
        <a href="{{ route('data_tanggapan') }}" class="btn btn-primary">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        <br><br>
        <form action="{{ route('detail_tanggapan', $data->pengaduan->id_pengaduan) }}" method="GET">
            @csrf
            <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="text" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{ $data->pengaduan->tgl_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="{{ $data->pengaduan->masyarakat->nik }}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $data->pengaduan->masyarakat->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                <input type="text" class="form-control" name="isi_pengaduan" id="isi_pengaduan" value="{{ $data->pengaduan->isi_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                <img src="{{ asset('asset/foto') }}/{{ $data->pengaduan->foto }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="{{ $data->pengaduan->status }}" readonly>
            </div>
            <div class="mb-3">
                <label for="tgl_tanggapan" class="form-label">Tanggal Tanggapan</label>
                <input type="text" class="form-control" name="tgl_tanggapan" id="tgl_tanggapan" value="{{ $data->tgl_tanggapan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_tanggapan" class="form-label">Isi Tanggapan</label>
                <input type="text" class="form-control" name="isi_tanggapan" id="isi_tanggapan" value="{{ $data->isi_tanggapan }}" readonly>
            </div>
        </form>
    </div>
</div>

@endsection
