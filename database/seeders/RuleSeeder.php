<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            'town_id' => '1',
            'title' => 'ごみ捨て',
            'comment' => '〇曜日に燃えるゴミ、第３土曜日に燃えないゴミ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('rules')->insert([
            'town_id' => '2',
            'title' => 'ごみ捨て',
            'comment' => '〇曜日に燃えるゴミ、第３土曜日に燃えないゴミ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
