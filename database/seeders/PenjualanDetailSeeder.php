<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Penjualan 1
            [
                'penjualan_id' => 1,
                'barang_id' => 1, // Barang 1
                'harga' => 10000, // Harga barang 1
                'jumlah' => 2, // Jumlah barang 1
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2, // Barang 2
                'harga' => 15000, // Harga barang 2
                'jumlah' => 1, // Jumlah barang 2
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3, // Barang 3
                'harga' => 20000, // Harga barang 3
                'jumlah' => 3, // Jumlah barang 3
            ],

            // Penjualan 2
            [
                'penjualan_id' => 2,
                'barang_id' => 4, // Barang 4
                'harga' => 12000, // Harga barang 4
                'jumlah' => 1, // Jumlah barang 4
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5, // Barang 5
                'harga' => 16000, // Harga barang 5
                'jumlah' => 2, // Jumlah barang 5
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6, // Barang 6
                'harga' => 25000, // Harga barang 6
                'jumlah' => 1, // Jumlah barang 6
            ],

            // Penjualan 3
            [
                'penjualan_id' => 3,
                'barang_id' => 7, // Barang 7
                'harga' => 30000, // Harga barang 7
                'jumlah' => 2, // Jumlah barang 7
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8, // Barang 8
                'harga' => 22000, // Harga barang 8
                'jumlah' => 1, // Jumlah barang 8
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9, // Barang 9
                'harga' => 18000, // Harga barang 9
                'jumlah' => 3, // Jumlah barang 9
            ],

            // Penjualan 4
            [
                'penjualan_id' => 4,
                'barang_id' => 10, // Barang 10
                'harga' => 14000, // Harga barang 10
                'jumlah' => 1, // Jumlah barang 10
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 11, // Barang 11
                'harga' => 17000, // Harga barang 11
                'jumlah' => 2, // Jumlah barang 11
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 12, // Barang 12
                'harga' => 21000, // Harga barang 12
                'jumlah' => 1, // Jumlah barang 12
            ],

            // Penjualan 5
            [
                'penjualan_id' => 5,
                'barang_id' => 13, // Barang 13
                'harga' => 26000, // Harga barang 13
                'jumlah' => 3, // Jumlah barang 13
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 14, // Barang 14
                'harga' => 30000, // Harga barang 14
                'jumlah' => 2, // Jumlah barang 14
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 15, // Barang 15
                'harga' => 32000, // Harga barang 15
                'jumlah' => 1, // Jumlah barang 15
            ],

            // Penjualan 6
            [
                'penjualan_id' => 6,
                'barang_id' => 1, // Barang 1
                'harga' => 10000, // Harga barang 1
                'jumlah' => 2, // Jumlah barang 1
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2, // Barang 2
                'harga' => 15000, // Harga barang 2
                'jumlah' => 1, // Jumlah barang 2
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 3, // Barang 3
                'harga' => 20000, // Harga barang 3
                'jumlah' => 3, // Jumlah barang 3
            ],

            // Penjualan 7
            [
                'penjualan_id' => 7,
                'barang_id' => 4, // Barang 4
                'harga' => 12000, // Harga barang 4
                'jumlah' => 1, // Jumlah barang 4
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5, // Barang 5
                'harga' => 16000, // Harga barang 5
                'jumlah' => 2, // Jumlah barang 5
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6, // Barang 6
                'harga' => 25000, // Harga barang 6
                'jumlah' => 1, // Jumlah barang 6
            ],

            // Penjualan 8
            [
                'penjualan_id' => 8,
                'barang_id' => 7, // Barang 7
                'harga' => 30000, // Harga barang 7
                'jumlah' => 2, // Jumlah barang 7
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 8, // Barang 8
                'harga' => 22000, // Harga barang 8
                'jumlah' => 1, // Jumlah barang 8
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 9, // Barang 9
                'harga' => 18000, // Harga barang 9
                'jumlah' => 3, // Jumlah barang 9
            ],

            // Penjualan 9
            [
                'penjualan_id' => 9,
                'barang_id' => 10, // Barang 10
                'harga' => 14000, // Harga barang 10
                'jumlah' => 1, // Jumlah barang 10
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 11, // Barang 11
                'harga' => 17000, // Harga barang 11
                'jumlah' => 2, // Jumlah barang 11
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 12, // Barang 12
                'harga' => 21000, // Harga barang 12
                'jumlah' => 1, // Jumlah barang 12
            ],

            // Penjualan 10
            [
                'penjualan_id' => 10,
                'barang_id' => 13, // Barang 13
                'harga' => 26000, // Harga barang 13
                'jumlah' => 3, // Jumlah barang 13
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 14, // Barang 14
                'harga' => 30000, // Harga barang 14
                'jumlah' => 2, // Jumlah barang 14
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15, // Barang 15
                'harga' => 32000, // Harga barang 15
                'jumlah' => 1, // Jumlah barang 15
            ],
        ];

        DB::table('t_penjualan_details')->insert($data);
    }
}
