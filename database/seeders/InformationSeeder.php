<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'title' => '夏祭り',
            'comment' => '〇〇月△△日に夏祭りを開催します。',
            'town_id' => '1',
            'evaluation' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
