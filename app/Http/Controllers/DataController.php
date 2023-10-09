<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    public function data_masyarakat()
    {
        $data = User::all();
        return view('dashboard.admin.data.data_masyarakat', compact('data'));
    }

    public function hapus_masyarakat($nik)
    {
        User::where('nik', $nik)->delete();
        return redirect()->route('data_masyarakat')->with('success', 'Berhasil menghapus data masyarakat');
    }

    public function data_admin()
    {
        $data = Admin::all();
        return view('dashboard.admin.data.data_admin', compact('data'));
    }

    public function tambah_data_admin()
    {
        return view('dashboard.admin.data.tambah_data_admin');
    }

    public function simpan_data_admin(Request $request)
    {
        Admin::create($request->all());
        return redirect()->route('data_admin')->with('success', 'Berhasil menambahkan data admin');
    }

    public function edit_data_admin($id_admin)
    {
        $data = Admin::where('id_admin', $id_admin)->first();
        return view('dashboard.admin.data.edit_data_admin', compact('data'));
    }

    public function update_data_admin(Request $request)
    {
        if($request->password != null){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'telp' => $request->telp
            ];
        }else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'telp' => $request->telp
            ];
        }

        Admin::where('id_admin', $request->id_admin)->update($data);
        return redirect()->route('data_admin')->with('success', 'Berhasil mengubah data admin');
    }

    public function hapus_data_admin($id_admin)
    {
        Admin::where('id_admin', $id_admin)->delete();
        return redirect()->route('data_admin')->with('success', 'Berhasil menghapus data admin');
    }

    public function data_pengaduan()
    {
        $data = Pengaduan::orderBy('status', 'desc')->with('masyarakat')->get();
        return view('dashboard.admin.data.data_pengaduan', compact('data'));
    }

    public function detail_pengaduan($id_pengaduan)
    {
        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->with('masyarakat')->first();
        return view('dashboard.admin.data.detail_pengaduan', compact('data'));
    }

    public function data_tanggapan()
    {
        $data = Tanggapan::with('pengaduan')->get();
        return view('dashboard.admin.data.data_tanggapan', compact('data'));
    }

    public function detail_tanggapan($id_tanggapan)
    {
        $data = Tanggapan::where('id_tanggapan', $id_tanggapan)->with('pengaduan')->first();
        return view('dashboard.admin.data.detail_tanggapan', compact('data'));
    }
}