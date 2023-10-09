@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary ">Edit Data Admin</div>
    <div class="card-body">
        <form action="{{ route('update_data_admin', $data->id_admin) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" value="{{ $data->name }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{ $data->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="">Pilih Role</option>
                    <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas" {{ $data->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telepon</label>
                <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan No Telepon" value="{{ $data->telp }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
    </div>
</div>

@endsection
