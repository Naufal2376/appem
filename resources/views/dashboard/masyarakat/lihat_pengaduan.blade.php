@extends('layouts.masyarakat')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Data Pengaduan</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th hidden>id</th>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>NIK</th>
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
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->isi_pengaduan }}</td>
                        <td><img src="{{ asset('asset/foto') }}/{{ $item->foto }}" style="width: 100px"></td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="text">Tanggapan</span>
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
