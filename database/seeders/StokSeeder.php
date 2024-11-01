<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Stok untuk Barang 1
            [
                'barang_id' => 1,
                'user_id' => 1,
                'supplier_id' => 1,
                'stok_tanggal' => '2024-10-05 10:00:00', // Tanggal stok
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 2,
                'user_id' => 1,
                'supplier_id' => 1,
                'stok_tanggal' => '2024-10-03 10:00:00', // Tanggal stok
                'stok_jumlah' => 80,
            ],
            [
                'barang_id' => 3,
                'user_id' => 2,
                'supplier_id' => 2,
                'stok_tanggal' => '2024-10-01 10:00:00', // Tanggal stok
                'stok_jumlah' => 70,
            ],
            [
                'barang_id' => 4,
                'user_id' => 2,
                'supplier_id' => 2,
                'stok_tanggal' => '2024-10-04 10:00:00', // Tanggal stok
                'stok_jumlah' => 30,
            ],

            // Stok untuk Barang 2
            [
                'barang_id' => 5,
                'user_id' => 3, // ID user yang melakukan input
                'supplier_id' => 2, // ID supplier
                'stok_tanggal' => '2024-10-02 10:00:00', // Tanggal stok
                'stok_jumlah' => 150,
            ],
            [
                'barang_id' => 6,
                'user_id' => 3,
                'supplier_id' => 2,
                'stok_tanggal' => '2024-10-06 10:00:00', // Tanggal stok
                'stok_jumlah' => 60,
            ],
            [
                'barang_id' => 7,
                'user_id' => 3,
                'supplier_id' => 3,
                'stok_tanggal' => '2024-10-03 10:00:00', // Tanggal stok
                'stok_jumlah' => 90,
            ],
            [
                'barang_id' => 8,
                'user_id' => 3,
                'supplier_id' => 3,
                'stok_tanggal' => '2024-10-04 10:00:00', // Tanggal stok
                'stok_jumlah' => 40,
            ],
            [
                'barang_id' => 9,
                'user_id' => 3,
                'supplier_id' => 3,
                'stok_tanggal' => '2024-10-05 10:00:00', // Tanggal stok
                'stok_jumlah' => 120,
            ],

            // Stok untuk Barang 3
            [
                'barang_id' => 10,
                'user_id' => 1,
                'supplier_id' => 1,
                'stok_tanggal' => '2024-10-01 10:00:00', // Tanggal stok
                'stok_jumlah' => 50,
            ],
            [
                'barang_id' => 11,
                'user_id' => 2,
                'supplier_id' => 2,
                'stok_tanggal' => '2024-10-02 10:00:00', // Tanggal stok
                'stok_jumlah' => 30,
            ],
            [
                'barang_id' => 12,
                'user_id' => 1,
                'supplier_id' => 3,
                'stok_tanggal' => '2024-10-03 10:00:00', // Tanggal stok
                'stok_jumlah' => 20,
            ],
            [
                'barang_id' => 13,
                'user_id' => 2,
                'supplier_id' => 3,
                'stok_tanggal' => '2024-10-04 10:00:00', // Tanggal stok
                'stok_jumlah' => 80,
            ],
            [
                'barang_id' => 14,
                'user_id' => 3,
                'supplier_id' => 1,
                'stok_tanggal' => '2024-10-05 10:00:00', // Tanggal stok
                'stok_jumlah' => 60,
            ],
            [
                'barang_id' => 15,
                'user_id' => 1,
                'supplier_id' => 2,
                'stok_tanggal' => '2024-10-06 10:00:00', // Tanggal stok
                'stok_jumlah' => 40,
            ],
        ];

        DB::table('t_stoks')->insert($data);
    }
}
