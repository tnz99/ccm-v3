<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class ChangePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = new Story();
        $story->title = 'the Change';
        $story->description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $story->position = 1;
        $story->headline_id = 5; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/change.jpeg';
        $story->dark_mode = true;
        $story->save();


        $change_gallery = new Gallery();
        $change_gallery->headline_id = 5; # refer HeadlineSeeder for ID;
        $change_gallery->position = 2;
        $change_gallery->title = 'The Change';
        $change_gallery->color = "#400C00;";
        $change_gallery->file_path = '/images/upload/change.jpeg';
        $change_gallery->dark_mode = true;
        $change_gallery->save();

        $climate_impacts = array(
            array(
                'title' => 'Agriculture',
                'description' => 'Changes in temperature and precipitation patterns impact agricultural productivity. Shifts in growing seasons, increased pest and disease pressure, and water availability affect crop yields and food security. Farming communities across Bhutan, especially those dependent on rain-fed agriculture, are vulnerable to these changes.',
                'file_path' => 'images/upload/galleries/change/change1.jpeg'
            ),
            array(
                'title' => 'Water Resources',
                'description' => 'Changes in rainfall patterns and increased evaporation rates affect water availability. This can lead to water scarcity in certain regions, impacting hydropower generation, irrigation for agriculture, and access to clean drinking water. Communities relying on these resources, particularly those in water-stressed areas, face challenges.',
                'file_path' => 'images/upload/galleries/change/change2.png'
            ),
            array(
                'title' => 'Glacial lake outburst floods (GLOFs)',
                'description' => 'Glacier retreat in Bhutan increases the risk of GLOFs. Communities living downstream of glacial lakes are at risk of sudden and devastating floods. These communities, often located in mountainous regions, need to be prepared for such events and have early warning systems in place.',
                'file_path' => 'images/upload/galleries/change/change3.jpeg'
            ),
            array(
                'title' => 'Biodiversity and Ecosystems',
                'description' => 'Changes in temperature and precipitation patterns can disrupt ecosystems and impact biodiversity. Species may face habitat loss or reduced suitability, affecting both plant and animal communities. Protected areas and communities dependent on forest resources for their livelihoods are particularly affected.',
                'file_path' => 'images/upload/galleries/change/change4.jpeg'
            ),
            array(
                'title' => 'Infrastructure and Settlements',
                'description' => 'Extreme weather events, such as floods and landslides, pose risks to infrastructure and settlements. Roads, bridges, and buildings are vulnerable to damage, affecting transportation, communication, and access to services. Communities living in vulnerable areas are at higher risk.',
                'file_path' => 'images/upload/galleries/change/change5.jpeg'
            ),
            array(
                'title' => 'Tourism',
                'description' => "Bhutan's tourism sector, which heavily relies on its natural beauty and cultural heritage, can be impacted by climate change. Changes in landscapes, biodiversity, and weather patterns can affect the attractiveness and accessibility of tourist destinations, potentially impacting local economies.",
                'file_path' => 'images/upload/galleries/change/change6.jpeg'
            )
        );
        
        foreach($climate_impacts as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 5; # refer HeadlineSeeder for ID;
            $story->gallery_id = $change_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }

    }
}
