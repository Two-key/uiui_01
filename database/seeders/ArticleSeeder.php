<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'town_id' => '1',
            'title' => '夏祭り',
            'comment' => '〇〇月△△日に夏祭りを開催します。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('articles')->insert([
            'town_id' => '2',
            'title' => 'コスモス祭り',
            'comment' => '10月10日にコスモス祭りを開催します。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
