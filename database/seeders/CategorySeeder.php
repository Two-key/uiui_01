<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_id' => '1',
            'category_name' => '食料品',
            ]);
        DB::table('categories')->insert([
            'category_id' => '2',
            'category_name' => '衣服',
            ]);
        DB::table('categories')->insert([
            'category_id' => '3',
            'category_name' => '飲食店',
            ]);
        DB::table('categories')->insert([
            'category_id' => '4',
            'category_name' => 'コンビニ',
            ]);
        DB::table('categories')->insert([
            'category_id' => '5',
            'category_name' => '家電屋',
            ]);
        DB::table('categories')->insert([
            'category_id' => '6',
            'category_name' => 'その他',
            ]);
    }
}
