<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function vpetugas()
    {
        $data = Pengaduan::where('status', '0')->count();
        return view('dashboard.petugas.index', compact('data'));
    }

    public function verifikasi_pengaduan()
    {
        $data = Pengaduan::where('status', '0')->orderBy('id_pengaduan', 'asc')->with('masyarakat')->get();
        return view('dashboard.petugas.verifikasi_pengaduan', compact('data'));
    }

    public function detail_verifikasi(Request $request)
    {
        $data = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->with('masyarakat')->first();
        return view('dashboard.petugas.detail_verifikasi', compact('data'));
    }

    public function simpan_verifikasi(Request $request)
    {
        $data = ['status' => 'proses'];
        Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update($data);

        return redirect()->route('verifikasi_pengaduan')->with('success', 'Berhasil verifikasi data');
    }
}