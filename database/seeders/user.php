<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nik' => '1607270019992351',
            'name' => 'naufal',
            'email' => 'naufal@gmail.com',
            'password' => Hash::make('naufal'),
            'telp' => '081234567890'
        ]);
    }
}