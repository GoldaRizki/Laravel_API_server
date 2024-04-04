<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alat;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Alat::create([
            'nama' => 'Printer 1',
            'harga' => 5000000,
            'tgl_beli' => '2023-07-01',
        ]);

        Alat::create([
            'nama' => 'Printer 2',
            'harga' => 6000000,
            'tgl_beli' => '2023-07-01',
        ]);

        Alat::create([
            'nama' => 'Komputer 1',
            'harga' => 10000000,
            'tgl_beli' => '2023-04-01',
        ]);

        Alat::create([
            'nama' => 'Komputer 2',
            'harga' => 9000000,
            'tgl_beli' => '2022-04-05',
        ]);


        
        Barang::create([
            'nama' => 'Pigura 4R',
            'jumlah' => 3,
            'harga_satuan' => 3500,
        ]);
        
        Barang::create([
            'nama' => 'Pigura 5R',
            'jumlah' => 10,
            'harga_satuan' => 10000,
        ]);

        Barang::create([
            'nama' => 'Pigura 10R',
            'jumlah' => 7,
            'harga_satuan' => 50000,
        ]);

        Barang::create([
            'nama' => 'Pigura SS',
            'jumlah' => 9,
            'harga_satuan' => 80000,
        ]);

    }
}
