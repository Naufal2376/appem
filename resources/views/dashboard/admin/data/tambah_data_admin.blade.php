@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Tambah Data Admin</div>
    <div class="card-body">
        <form action="{{ route('simpan_data_admin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">No Telepon</label>
                <input type="number" name="telp" id="telp" class="form-control" placeholder="Masukkan No Telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>

@endsection
