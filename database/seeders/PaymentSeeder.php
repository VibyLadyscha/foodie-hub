<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'payment_method' => 'Gopay',
            'payment_fee' => 1000,
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Shopeepay',
            'payment_fee' => 1000,
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Dana',
            'payment_fee' => 1000,
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'OVO',
            'payment_fee' => 1500,
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Cash',
            'payment_fee' => 0,
        ]);
    }
}
