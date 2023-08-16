<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create(
        [
            'kode_prodi' => '62201',
            'nama_prodi' => 'Akuntansi'
        ]);
        Prodi::create(
        [
            'kode_prodi' => '26201',
            'nama_prodi' => 'Teknik Industri'
        ]);
        Prodi::create(
        [
            'kode_prodi' => '55202',
            'nama_prodi' => 'Informatika'
        ]);
        Prodi::create(
        [
            'kode_prodi' => '29201',
            'nama_prodi' => 'Sistem Informasi'
        ]);
        Prodi::create(
        [
            'kode_prodi' => '61201',
            'nama_prodi' => 'Manajemen'
        ]);
    }
}
