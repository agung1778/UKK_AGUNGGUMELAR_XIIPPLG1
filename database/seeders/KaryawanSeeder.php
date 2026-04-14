<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'nama' => 'Budi',
            'jabatan' => 'Staff',
            'gaji_pokok' => 3000000
        ]);

        Karyawan::create([
            'nama' => 'Siti',
            'jabatan' => 'Admin',
            'gaji_pokok' => 3500000
        ]);
    }
}
