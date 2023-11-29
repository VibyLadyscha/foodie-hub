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
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Shopeepay',
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Dana',
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'OVO',
        ]);
        DB::table('payments')->insert([
            'payment_method' => 'Cash',
        ]);
    }
}
