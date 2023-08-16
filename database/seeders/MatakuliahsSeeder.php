<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matakuliah::create(
        [
            'id_matkul' => '12345',
            'nama_matkul' => 'matematika',
            'semester' => '1',
            'sks' => '3',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12346',
            'nama_matkul' => 'algoritma pemrograman',
            'semester' => '1',
            'sks' => '4',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12347',
            'nama_matkul' => 'struktur data',
            'semester' => '2',
            'sks' => '3',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12348',
            'nama_matkul' => 'logika informatika',
            'semester' => '2',
            'sks' => '4',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12349',
            'nama_matkul' => 'networking',
            'semester' => '3',
            'sks' => '3',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12350',
            'nama_matkul' => 'database 1',
            'semester' => '3',
            'sks' => '4',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12351',
            'nama_matkul' => 'database 2',
            'semester' => '4',
            'sks' => '3',
        ]);
        Matakuliah::create(
        [
            'id_matkul' => '12352',
            'nama_matkul' => 'artificial intellegence',
            'semester' => '4',
            'sks' => '4',
        ]);
    }
}
