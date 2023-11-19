<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
                'product_image' => 'nasi.jpg',
                'product_name' => 'Nasi Putih',
                'product_stock' => 35,
                'product_category' => 'Makanan',
                'product_price' => 5000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'tongkol.png',
                'product_name' => 'Gulai Ikan',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'telor.png',
                'product_name' => 'Telur Dadar',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'tempeorek.png',
                'product_name' => 'Tempe Orek',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'perkedel.png',
                'product_name' => 'Perkedel',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 2000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'sarden.png',
                'product_name' => 'Ikan Sarden',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'ayam lengkuas.png',
                'product_name' => 'Ayam Serundeng',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 9000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'sardenjg.png',
                'product_name' => 'Ikan Tongkol',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'balado.png',
                'product_name' => 'Telur Balado',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'tektek.png',
                'product_name' => 'Mie Tektek',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 8000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'ayamgor.png',
                'product_name' => 'Ayam Goreng',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 9000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'tempe.png',
                'product_name' => 'Tempe Balado',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'jeruk.png',
                'product_name' => 'Es Jeruk',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 6000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'kuwut.png',
                'product_name' => 'Es Kuwut',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 8000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'campur.png',
                'product_name' => 'Es Campur',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 7000,
        ]);
        DB::table('products')->insert([
                'product_image' => 'esteh.png',
                'product_name' => 'Es Teh',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 4000,
            ]);
    }
}
