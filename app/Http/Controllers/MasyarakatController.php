<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('dashboard.masyarakat.index');
    }

    public function tulis_pengaduan()
    {
        return view('dashboard.masyarakat.tulis_pengaduan');
    }

    public function simpan_pengaduan(Request $request)
    {
        if($request->hasFile('foto')){
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ydmhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('asset/foto'), $foto_baru);
        }
        $data = [
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_pengaduan' => $request->isi_pengaduan,
            'foto' => $foto_baru
        ];

        Pengaduan::create($data);
        return redirect()->route('lihat_pengaduan')->with('success', 'Berhasil memberikan pengaduan');
    }

    public function lihat_pengaduan()
    {
        $data = Pengaduan::where('nik', auth()->user()->nik)->get();
        return view('dashboard.masyarakat.lihat_pengaduan', compact('data'));
    }
}