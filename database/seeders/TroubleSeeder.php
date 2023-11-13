<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TroubleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('troubles')->insert([
            'town_id' => '1',
            'title' => '何曜日にゴミを捨てるの？',
            'comment' => '〇曜日に燃えるゴミ、第３土曜日に燃えないゴミだよ。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('troubles')->insert([
            'town_id' => '2',
            'title' => '粗大ごみはいつ出すの？',
            'comment' => '毎月25日だよ。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
