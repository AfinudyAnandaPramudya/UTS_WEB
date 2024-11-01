<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, // ID user yang melakukan penjualan
                'pembeli' => 'John Doe', // Nama pembeli
                'penjualan_kode' => 'PNJ001', // Kode penjualan
                'penjualan_tanggal' => '2024-10-01 14:00:00', // Tanggal penjualan
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PNJ002',
                'penjualan_tanggal' => '2024-10-02 15:30:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PNJ003',
                'penjualan_tanggal' => '2024-10-03 10:45:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PNJ004',
                'penjualan_tanggal' => '2024-10-04 12:20:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Chris Green',
                'penjualan_kode' => 'PNJ005',
                'penjualan_tanggal' => '2024-10-05 11:15:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Nancy White',
                'penjualan_kode' => 'PNJ006',
                'penjualan_tanggal' => '2024-10-06 16:30:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Tom Black',
                'penjualan_kode' => 'PNJ007',
                'penjualan_tanggal' => '2024-10-07 09:00:00',
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Sara Blue',
                'penjualan_kode' => 'PNJ008',
                'penjualan_tanggal' => '2024-10-08 13:00:00',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Leo Red',
                'penjualan_kode' => 'PNJ009',
                'penjualan_tanggal' => '2024-10-09 18:00:00',
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Ella Purple',
                'penjualan_kode' => 'PNJ010',
                'penjualan_tanggal' => '2024-10-10 17:00:00',
            ],
        ];

        DB::table('t_penjualans')->insert($data);
    }
}
