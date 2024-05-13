<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            HeadlineSeeder::class,
            KingdomPageSeeder::class,
            FloraPageSeeder::class,
            FaunaPageSeeder::class,
            ClimatePageSeeder::class,
            ChangePageSeeder::class,
            PeoplePageSeeder::class,
            LawPageSeeder::class
        ]);
    }
}
