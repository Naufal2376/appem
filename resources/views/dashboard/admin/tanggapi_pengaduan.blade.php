@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Isi Pengaduan</th>
                        <th>Foto</th>
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
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->masyarakat->name }}</td>
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td width="250px">{{ $item->isi_pengaduan }}</td>
                        <td><img src="{{ asset('asset/foto') }}/{{ $item->foto }}" width="100px"></td>
                        <td>
                            <a href="{{ route('tanggapi_pengaduan', $item->id_pengaduan) }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fas fa-fw fa-check"></i>
                                </span>
                                <span class="text">Tanggapi</span>
                            </a>
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
