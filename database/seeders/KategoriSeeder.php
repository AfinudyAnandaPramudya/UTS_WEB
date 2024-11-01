<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'K001',
                'kategori_nama' => 'Minuman',
            ],
            [
                'kategori_kode' => 'K002',
                'kategori_nama' => 'Makanan Ringan',
            ],
            [
                'kategori_kode' => 'K003',
                'kategori_nama' => 'Makanan Berat',
            ],
            [
                'kategori_kode' => 'K004',
                'kategori_nama' => 'Kue',
            ],
            [
                'kategori_kode' => 'K005',
                'kategori_nama' => 'Camilan',
            ],
        ];

        DB::table('m_kategoris')->insert($data);
    }
}
