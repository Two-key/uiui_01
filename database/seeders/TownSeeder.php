<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towns')->insert([
            'name' => '〇〇町',
            'address' => '福岡県福岡市〇〇町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('towns')->insert([
            'name' => '福岡町',
            'address' => '福岡県福岡市〇〇町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
