<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Berita::factory(10)->create();
        \App\Models\Pengguna::factory(200)->create();
        // Pengguna::create([
        //     'nama' => 'admin',
        //     'email' => 'admin1@gmail.com',
        //     'password' => Hash::make('123123'),
        //     'alamat' => '-',
        //     'no_hp' => '08123456789',
        //     'tempat_lahir' => 'Bandung',
        //     'tanggal_lahir' => '2000-01-01',
        //     'jenis_kelamin' => 'Laki-laki',
        //     'agama' => 'Islam',
        //     'sekolah_asal' => 'SMA Negeri 1 Bandung',
        //     'nama_ayah' => 'fadil',
        //     'no_hp_ayah' => '08123456789',
        //     'pekerjaan_ayah' => 'PNS',
        //     'alamat_ayah' => 'Bandung',
        //     'nama_ibu' => 'fadilah',
        //     'no_hp_ibu' => '08123456789',
        //     'pekerjaan_ibu' => 'PNS',
        //     'alamat_ibu' => 'Bandung',
        //     'status_pendaftaran' => 'belum',
        //     'status_pembayaran' => 'belum',
        //     'status_pembayaran_transfer' => 'belum',
        //     'lvl' => 'admin',
        // ]);
    }
}
