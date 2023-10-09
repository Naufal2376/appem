@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary ">Data Admin</div>
    <div class="card-body">
        <a href="{{ route('tambah_data_admin') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-plus"></i>
            </span>
            <span class="text">Tambah Admin</span>
        </a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>
                            <form action="{{ route('hapus_data_admin', $item->id_admin) }}"  method="POST">
                                @csrf
                                <a href="{{ route('edit_data_admin', $item->id_admin) }}" class="btn btn-warning">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
