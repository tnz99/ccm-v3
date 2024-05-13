<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class LawPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = new Story();
        $story->title = 'the Laws';
        $story->description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $story->position = 1;
        $story->headline_id = 6; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/law.png';
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->dark_mode = true;
        $story->save();
    }
}
