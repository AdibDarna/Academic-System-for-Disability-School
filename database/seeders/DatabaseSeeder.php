<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guru;
use App\Models\Home_Informasi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Istianah Muslim',
            'email' => 'isti@pcr.ac.id',
            'role' => 'guru',
            'password' => Hash::make('12345678')
        ]);

        Guru::create([
            'nip' => '148908',
            'nama' => 'Istianah Muslim',
            'email' =>'isti@pcr.ac.id',
            'password' => '12345678',
            'tanggal_lahir' => '1986-07-25',
            'jenis_kelamin' => 'Perempuan',
            'bidang' => 'Bahasa Indonesia',
            'jabatan' => 'Guru',
            'tahun_masuk' => '2022'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);

   

        Home_Informasi::create([
            'id' => 1,
            'informasi' => 'Kamu Harus Ganti isi Informasinya!!!'
        ]);
    }
}
