<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan_masyarakat()
    {
        $data = User::all();
        return view('dashboard.admin.laporan.laporan_masyarakat', compact('data'));
    }

    public function laporan_admin()
    {
        $data = Admin::all();
        return view('dashboard.admin.laporan.laporan_admin', compact('data'));
    }

    public function laporan_pengaduan()
    {
        $data = Pengaduan::all();
        return view('dashboard.admin.laporan.laporan_pengaduan', compact('data'));
    }

    public function laporan_tanggapan()
    {
        $data = Tanggapan::all();
        return view('dashboard.admin.laporan.laporan_tanggapan', compact('data'));
    }
}