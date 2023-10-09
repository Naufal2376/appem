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
            <div class="h6 font-weight-bold">Laporan Tanggapan</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengaduan</th>
                            <th width="300px">Isi Pengaduan</th>
                            <th>Tanggal Tanggapan</th>
                            <th>Isi Tanggapan</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pengaduan->tgl_pengaduan }}</td>
                            <td>{{ $item->pengaduan->isi_pengaduan }}</td>
                            <td>{{ $item->tgl_tanggapan }}</td>
                            <td>{{ $item->isi_tanggapan }}</td>
                            <td><img src="{{ asset('asset/foto/'.$item->pengaduan->foto) }}" width="100px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
