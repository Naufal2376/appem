@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('simpan_tanggapan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tgl_tanggapan" class="form-label">Tanggal Tanggapan</label>
                <input type="text" name="tgl_tanggapan" id="tgl_tanggapan" class="form-control" value="{{ date('Y-m-d') }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $data->masyarakat->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="id_pengaduan" class="form-label">Id Pengaduan</label>
                <input type="text" name="id_pengaduan" id="id_pengaduan" class="form-control" value="{{ $data->id_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="text" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value="{{ $data->tgl_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                <input type="text" name="isi_pengaduan" id="isi_pengaduan" class="form-control" value="{{ $data->isi_pengaduan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                <img src="{{ asset('asset/foto') }}/{{ $data->foto }}">
            </div>
            <div class="mb-3">
                <label for="isi_tanggapan" class="form-label">Isi Tanggapan</label>
                <textarea name="isi_tanggapan" id="isi_tanggapan" class="form-control" style="height: 150px"></textarea>
            </div>
            <br>

            <input type="submit" class="btn btn-primary" value="Kirim Tanggapan">
        </form>
    </div>
</div>

@endsection
