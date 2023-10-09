<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'telp' => '081234098765',
            'password' => Hash::make('petugas'),
            'role' => 'petugas',
        ]);
        DB::table('admin')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'telp' => '081234068765',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
    }
}