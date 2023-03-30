<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Bolu Peca',
                'deskripsi' => 'Kue bolu disiram gulmer',
                'harga' => 10_0000,
                'stok' => 20,
            ],
            [
                'nama' => 'Sari Pengantin',
                'deskripsi' => 'Temannya amparan tatak',
                'harga' => 15_0000,
                'stok' => 50,
            ]
            ];

            foreach ($data as $item) {
                Produk::create($item);
            }
    }
}
