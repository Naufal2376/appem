<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['id_pengaduan', 'tgl_pengaduan', 'nik', 'isi_pengaduan', 'foto', 'status'];

    public function pengaduan()
    {
        return $this->hasOne(Tanggapan::class, 'id_pengaduan');
    }

    public function masyarakat()
    {
        return $this->hasOne(User::class, 'nik', 'nik');
    }

}