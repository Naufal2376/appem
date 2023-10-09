@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Data Pengaduan</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Isi Pengaduan</th>
                        <th>Foto</th>
                        <th>Status</th>
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
                        <td>{{ $item->masyarakat->nik }}</td>
                        <td>{{ $item->masyarakat->name }}</td>
                        <td width="300px">{{ $item->isi_pengaduan }}</td>
                        <td><img src="{{ asset('asset/foto/'.$item->foto) }}" width="100px"></td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('detail_pengaduan', $item->id_pengaduan) }}" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-fw fa-info"></i>
                                </span>
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
