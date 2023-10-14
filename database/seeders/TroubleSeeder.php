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
            'title' => '何曜日にゴミを捨てるの？',
            'comment' => '〇曜日に燃えるゴミ、第３土曜日に燃えないゴミだよ。',
            'town_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
