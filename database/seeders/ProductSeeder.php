<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
                'product_image' => 'nasi.jpg',
                'product_name' => 'Nasi Putih',
                'product_stock' => 35,
                'product_category' => 'Makanan',
                'product_price' => 5000,
                'product_composition' => 'beras, air',
        ]);
        DB::table('products')->insert([
                'product_image' => 'tongkol.png',
                'product_name' => 'Gulai Ikan',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
                'product_composition' => 'ikan, santan kelapa, serai, daun jeruk, daun salam, lengkuas, minyak kelapa, cabai merah, bawang merah, bawang putih, kunyit, jahe, ketumbar',
        ]);
        DB::table('products')->insert([
                'product_image' => 'telor.png',
                'product_name' => 'Telur Dadar',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
                'product_composition' => 'telur, cabai, penyedap rasa',
        ]);
        DB::table('products')->insert([
                'product_image' => 'tempeorek.png',
                'product_name' => 'Tempe Orek',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 4000,
                'product_composition' => 'tempe, bawang putih, bawang merah, cabai, garam, kecap manis',
        ]);
        DB::table('products')->insert([
                'product_image' => 'perkedel.png',
                'product_name' => 'Perkedel',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 2000,
                'product_composition' => 'kentang, bawang putih, bawang merah, garam, lada, telur',
        ]);
        DB::table('products')->insert([
                'product_image' => 'sarden.png',
                'product_name' => 'Ikan Sarden',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
                'product_composition' => 'ikan sarden, minyak sayur, garam, saus tomat, cabai',
        ]);
        DB::table('products')->insert([
                'product_image' => 'ayam lengkuas.png',
                'product_name' => 'Ayam Serundeng',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 9000,
                'product_composition' => 'ayam, kelapa parut, bawang merah, bawang putih, serai, daun jeruk, cabai, gula merah, garam, santan',
        ]);
        DB::table('products')->insert([
                'product_image' => 'sardenjg.png',
                'product_name' => 'Ikan Tongkol',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
                'product_composition' => 'ikan tongkol, bawang putih, bawang merah, jahe, cabai, garam',
        ]);
        DB::table('products')->insert([
                'product_image' => 'balado.png',
                'product_name' => 'Telur Balado',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
                'product_composition' => 'tempe, cabai merah, bawang merah, bawang putih, tomat, garam, gula, minyak goreng',
        ]);
        DB::table('products')->insert([
                'product_image' => 'tektek.png',
                'product_name' => 'Mie Tektek',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 8000,
                'product_composition' => 'mie, bawang putih, bawang merah, cabai, kecap manis, kecap asin, garam, merica, telur, tauge',
        ]);
        DB::table('products')->insert([
                'product_image' => 'ayamgor.png',
                'product_name' => 'Ayam Goreng',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 9000,
                'product_composition' => 'ayam, bawang putih, bawang merah, jahe, ketumbar, lada, kunyit, garam, merica',
        ]);
        DB::table('products')->insert([
                'product_image' => 'tempe.png',
                'product_name' => 'Tempe Balado',
                'product_stock' => 25,
                'product_category' => 'Makanan',
                'product_price' => 3000,
                'product_composition' => 'tempe, cabai merah, bawang merah, bawang putih, tomat, garam, gula, minyak goreng',
        ]);
        DB::table('products')->insert([
                'product_image' => 'jeruk.png',
                'product_name' => 'Es Jeruk',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 6000,
                'product_composition' => 'jeruk, gula, air',
        ]);
        DB::table('products')->insert([
                'product_image' => 'kuwut.png',
                'product_name' => 'Es Kuwut',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 8000,
                'product_composition' => 'air kelapa, sirup kelapa, gula merah cair, dan es serut',
        ]);
        DB::table('products')->insert([
                'product_image' => 'campur.png',
                'product_name' => 'Es Campur',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 7000,
                'product_composition' => 'es serut, kelapa muda parut, agar-agar yang dipotong, cincau, biji selasih, potongan buah nangka, nanas, kelapa, kolang-kaling',
        ]);
        DB::table('products')->insert([
                'product_image' => 'esteh.png',
                'product_name' => 'Es Teh',
                'product_stock' => 20,
                'product_category' => 'Minuman',
                'product_price' => 4000,
                'product_composition' => 'teh, gula, air',
            ]);
    }
}
