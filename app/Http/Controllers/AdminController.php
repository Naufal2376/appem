<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function vadmin()
    {
        $data = [
            'belum_verifikasi' => Pengaduan::where('status', '0')->count(),
            'belum_tanggapi' => Pengaduan::where('status', 'proses')->count(),
            'selesai_tanggapi' => Pengaduan::where('status', 'selesai')->count(),
            'jumlah_masyarakat' => User::all()->count(),
            'jumlah_petugas' => Admin::where('role', 'petugas')->count(),
            'jumlah_admin' => Admin::where('role', 'admin')->count(),
        ];
        return view('dashboard.admin.index', compact('data'));
    }

    public function tanggapi_pengaduan()
    {
        $data = Pengaduan::where('status', 'proses')->orderBy('id_pengaduan', 'asc')->with('masyarakat')->get();
        return view('dashboard.admin.tanggapi_pengaduan', compact('data'));
    }

    public function detail_tanggapan(Request $request)
    {
        $data = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->with('masyarakat')->first();
        return view('dashboard.admin.detail_tanggapan', compact('data'));
    }

    public function simpan_tanggapan(Request $request)
    {
        $data = [
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'isi_tanggapan' => $request->isi_tanggapan,
            'id_admin' => auth('admin')->user()->id_admin
        ];

        $status = [
            'status' => 'selesai'
        ];

        if(Tanggapan::create($data)){
            Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update($status);
        }
        return redirect()->route('tanggapi_pengaduan')->with('success', 'Berhasil memberikan tanggapan');
    }
}