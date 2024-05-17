<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class ClimatePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = new Story();
        $story->title = 'the Climate';
        $story->description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $story->position = 1;
        $story->headline_id = 4; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/climate.png';
        $story->cnav_background = 'linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)';
        $story->dark_mode = true;
        $story->save();

        $story = new Story();
        $story->title = 'the Summer';
        $story->description = "Bhutan's summer is a canvas of vibrant traditions and lush landscapes. From tending to crops and lively festivals to outdoor adventures against stunning mountains, it's a season of cultural richness. The community thrives with social gatherings, traditional attire, and fresh produce. Bhutan's summer is a celebration of heritage, community, and the breathtaking beauty of this Himalayan kingdom.";
        $story->position = 2;
        $story->headline_id = 4; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/summer.png';
        $story->cnav_background = 'linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)';
        $story->dark_mode = true;
        $story->save();

        $story = new Story();
        $story->title = 'the Winter';
        $story->description = "Bhutanese winters are marked by festive gatherings and a cozy lifestyle. Traditional clothing keeps locals warm as they celebrate cultural richness. The serene landscapes blanketed in snow create a tranquil backdrop.";
        $story->position = 3;
        $story->headline_id = 4; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/winter.png';
        $story->dark_mode = true;
        $story->animation = 'snow';
        $story->cnav_background = 'linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)';
        $story->save();

        $story = new Story();
        $story->title = 'the Spring';
        $story->description = "Spring, brings a burst of color and life to Bhutan. The landscape transforms into a riot of blossoming flowers and vibrant greenery. This season is ideal for trekking and hiking as the weather becomes milder. Rhododendrons, the national flower, paint the hillsides in various hues. Farmers begin planting crops, and festivals celebrating renewal and vitality are common. Spring in Bhutan is a time of natural beauty and cultural vibrancy.";
        $story->position = 4;
        $story->headline_id = 4; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/spring.png';
        $story->cnav_background = 'linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)';
        $story->animation = 'sakura';
        $story->dark_mode = true;
        $story->save();

        $story = new Story();
        $story->title = 'the Autumn';
        $story->description = "Bhutan's autumn (September to November) is a masterpiece painted in gold and amber. The air is crisp, and the landscape glows with the warm colors of changing leaves. Harvest activities unfold against the backdrop of clear blue skies, offering a captivating setting for lively festivals. It's a season that beckons explorers to witness the captivating allure of Bhutan's cultural and natural wonders.";
        $story->position = 5;
        $story->headline_id = 4; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/autumn.png';
        $story->cnav_background = 'linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)';
        $story->animation = 'fall';
        $story->dark_mode = true;
        $story->save();

    }
}
