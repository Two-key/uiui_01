<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ハナコ',
            'email' => 'a@a',
            'password' => 'password',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
