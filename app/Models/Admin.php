<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;
    protected $table = 'admin';
    protected $guard = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['id_admin', 'name', 'email', 'telp', 'password', 'role'];
    protected $enum = ['role' => ['petugas', 'admin']];

     // Fungsi untuk peran "petugas"
    public function isPetugas()
    {
        return $this->role === 'petugas';
    }

    // Fungsi untuk peran "admin"
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'id_admin');
    }
}