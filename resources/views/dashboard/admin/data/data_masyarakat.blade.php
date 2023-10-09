@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary ">Data Masyarakat</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No Telepon</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>
                            <form action="{{ route('hapus_masyarakat', $item->nik) }}" onclick="return confirm('yakin ingin menghapus data ini?')" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
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
