<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'S001',
                'supplier_nama' => 'Supplier A',
                'supplier_alamat' => 'Jl. Contoh No. 1, Jakarta',
            ],
            [
                'supplier_kode' => 'S002',
                'supplier_nama' => 'Supplier B',
                'supplier_alamat' => 'Jl. Contoh No. 2, Bandung',
            ],
            [
                'supplier_kode' => 'S003',
                'supplier_nama' => 'Supplier C',
                'supplier_alamat' => 'Jl. Contoh No. 3, Surabaya',
            ],
        ];

        DB::table('m_suppliers')->insert($data);
    }
}
