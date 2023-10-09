@extends('layouts.masyarakat')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Formulir Pengaduan</div>
    <div class="card-body">
        <form class="user" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                <input type="text" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan" value="{{ date('Y-m-d') }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="{{ auth()->user()->nik }}" readonly>
            </div>
            <div class="mb-3">
                <label for="isi_pengaduan" class="form-label">Isi Pengaduan</label>
                <textarea type="text" class="form-control" name="isi_pengaduan" id="isi_pengaduan" style="height: 150px"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto" accept=".jpg, .jpeg, .png">
                <font color="red">**hanya menerima format jpg, jpeg, png</font>
            </div>
            <br>

            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-warning">
        </form>
    </div>
</div>

@endsection
