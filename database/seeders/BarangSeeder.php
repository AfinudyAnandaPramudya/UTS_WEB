<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Barang untuk Supplier A
            [
                'kategori_id' => 1, // Sesuaikan dengan kategori_id yang ada
                'barang_kode' => 'B001',
                'barang_nama' => 'Kopi Arabika',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B002',
                'barang_nama' => 'Teh Hijau',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B003',
                'barang_nama' => 'Kue Brownies',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B004',
                'barang_nama' => 'Donat',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B005',
                'barang_nama' => 'Susu',
                'harga_beli' => 12000,
                'harga_jual' => 17000,
            ],

            // Barang untuk Supplier B
            [
                'kategori_id' => 3,
                'barang_kode' => 'B006',
                'barang_nama' => 'Pasta',
                'harga_beli' => 15000,
                'harga_jual' => 22000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B007',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B008',
                'barang_nama' => 'Kue Lapis',
                'harga_beli' => 18000,
                'harga_jual' => 25000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B009',
                'barang_nama' => 'Kue Cubir',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B010',
                'barang_nama' => 'Ayam Penyet',
                'harga_beli' => 30000,
                'harga_jual' => 40000,
            ],

            // Barang untuk Supplier C
            [
                'kategori_id' => 5,
                'barang_kode' => 'B011',
                'barang_nama' => 'Camilan Kacang',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B012',
                'barang_nama' => 'Keripik Singkong',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B013',
                'barang_nama' => 'Kacang Garam',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B014',
                'barang_nama' => 'Popcorn',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B015',
                'barang_nama' => 'Chips',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
        ];

        DB::table('m_barangs')->insert($data);
    }
}
