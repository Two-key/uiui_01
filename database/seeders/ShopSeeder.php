<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('shops')->insert([
        'name' => '〇〇商店',
        'address' => '福岡県福岡市〇〇町',
        'category_id' => '1',
        'town_id' => '1',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
