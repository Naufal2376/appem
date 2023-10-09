@extends('layouts.admin')
@section('content')

<div class="card shadow">
    <div class="h3 card-header text-primary">Data Tanggapan</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Isi Pengaduan</th>
                        <th>Tanggal Tanggapan</th>
                        <th>Isi Tanggapan</th>
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
                        <td>{{ $item->pengaduan->tgl_pengaduan }}</td>
                        <td>{{ $item->pengaduan->isi_pengaduan }}</td>
                        <td>{{ $item->tgl_tanggapan }}</td>
                        <td>{{ $item->isi_tanggapan }}</td>
                        <td><img src="{{ asset('asset/foto/'.$item->pengaduan->foto) }}" width="100px"></td>
                        <td>{{ $item->pengaduan->status }}</td>
                        <td>
                            <a href="{{ route('detail_tanggapan', $item->id_tanggapan) }}" class="btn btn-info btn-icon-split">
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
