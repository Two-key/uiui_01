<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            EvaluationSeeder::class,
            ArticleSeeder::class,
            LikeSeeder::class,
            RuleSeeder::class,
            ShopSeeder::class,
            TownSeeder::class,
            TroubleSeeder::class,
        ]);

    }
}
