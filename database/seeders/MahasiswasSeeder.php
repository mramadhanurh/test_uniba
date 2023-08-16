<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create(
        [
            'nim' => '22039090',
            'nama_mhs' => 'sinta',
            'tempat_lahir' => 'sumenep',
            'tgl_lahir' => '2000-07-09',
            'prodi_id' => '1',
            'alamat' => 'dasuk sumenep'
        ]);
        Mahasiswa::create(
        [
            'nim' => '22039091',
            'nama_mhs' => 'santi',
            'tempat_lahir' => 'bangkalan',
            'tgl_lahir' => '2000-07-10',
            'prodi_id' => '2',
            'alamat' => 'socah bangkalan'
        ]);
        Mahasiswa::create(
        [
            'nim' => '22039092',
            'nama_mhs' => 'juminten',
            'tempat_lahir' => 'sampang',
            'tgl_lahir' => '2000-07-11',
            'prodi_id' => '3',
            'alamat' => 'jrengik sampang'
        ]);
        Mahasiswa::create(
        [
            'nim' => '22039093',
            'nama_mhs' => 'abdullah',
            'tempat_lahir' => 'pamekasan',
            'tgl_lahir' => '2000-07-12',
            'prodi_id' => '4',
            'alamat' => 'larangan pamekasan'
        ]);
        Mahasiswa::create(
        [
            'nim' => '22039094',
            'nama_mhs' => 'retno',
            'tempat_lahir' => 'sumenep',
            'tgl_lahir' => '2000-07-10',
            'prodi_id' => '5',
            'alamat' => 'talang bluto'
        ]);
    }
}
