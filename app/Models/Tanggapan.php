<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = ['id_tanggapan', 'id_pengaduan','tgl_tanggapan', 'isi_tanggapan', 'id_admin'];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

}