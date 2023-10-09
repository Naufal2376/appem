@extends('layouts.admin')
@section('content')

<button class="btn btn-warning" onclick="printFieldset()">
    <span class="icon text-white-50">
        <i class="fas fa-print"></i>
    </span>
    <span class="text">Cetak Data</span>
</button>
<br><br>

<fieldset id="myFieldset">
    <div class="card shadow">
        <div class="card-header text-center">
            <div class="h3 font-weight-bold">APLIKASI PENGADUAN MASYARAKAT</div>
            <div class="h4 font-weight-bold">Sumsel, Kab. Muba, Kec. Sekayu</div>
            <div class="h6 font-weight-bold">{{ auth()->user()->name }}</div>
            <hr>
            <div class="h6 font-weight-bold">Laporan Pengaduan</div>
        </div>
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->masyarakat->nik }}</td>
                            <td>{{ $item->masyarakat->name }}</td>
                            <td>{{ $item->tgl_pengaduan }}</td>
                            <td width="300px">{{ $item->isi_pengaduan }}</td>
                            <td><img src="{{ asset('asset/foto/'.$item->foto) }}" width="100px"></td>
                            <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="h6 text-primary font-weight-bold text-right">Sekayu, {{ date('d M Y') }}</div><br><br><br><br>
                <div class="h6 text-primary font-weight-bold text-right">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </div>
</fieldset>
<script>
    function printFieldset() {
        var fieldset = document.getElementById('myFieldset').innerHTML;
        var original = document.body.innerHTML;

        document.body.innerHTML = fieldset;
        window.print();

        document.body.innerHTML = original;
    }
</script>
@endsection
