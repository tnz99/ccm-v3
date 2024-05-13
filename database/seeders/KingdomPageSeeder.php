<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use App\Models\Story;
use App\Models\Gallery;

class KingdomPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Main Story
        $story = new Story();
        $story->title = 'the kingdom';
        $story->description = 'Bhutan excels in environmental sustainability, preserving vast forests for carbon storage and biodiversity. Committed to carbon neutrality, it prioritizes responsible forestry, hydropower, sustainable agriculture, and eco-friendly practices, all while integrating well-being through the unique concept of Gross National Happiness.';
        $story->position = 1;
        $story->headline_id = 1; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/kingdom.png';
        $story->dark_mode = true;
        $story->cnav_background = "linear-gradient(270deg, #555050 42.11%, rgba(159, 159, 159, 0.00) 101.31%);";
        $story->save();

        // Gallery
        $galleries = array(
            array(
                'title' => 'The 4th King King Jigme Singye Wangchuck (1972-2006)',
                'description' => "King Jigme Singye Wangchuck's reign saw significant advancements in Bhutan's environmental policies and sustainable development. He laid the foundation for Bhutan's commitment to carbon neutrality and environmental conservation. During his rule, the Bhutanese government implemented strict regulations to protect the nation's pristine forests, which cover over 70% of the country. His Majesty recognized the importance of preserving Bhutan's natural heritage and initiated innovative policies like \"One Family, One Cow\" to reduce pressure on forests for firewood and advocated for sustainable agricultural practices. Additionally, he emphasized the importance of community-based forest management and biodiversity conservation.",
                'file_path' => 'images/upload/galleries/kingdom/king1.jpg'
            ),
            array(
                'title' => 'The 4th King King Jigme Singye Wangchuck (1972-2006)',
                'description' => "His Majesty the 4th king of Bhutan was awarded the 2022 Blue Planet Prize by the Asahi Glass Foundation of Japan. The prize was given in recognition of His Majesty's visionary leadership and contributions to environmental conservation through the development philosophy of Gross National Happiness (GNH). During the Prize Acceptance Speech, Her Royal Highness Ashi Sonam Dechan Wangchuck, who received the award on behalf of His Majesty, emphasized that the Prize is a tribute to Bhutan's commitment to preserving ecological balance. His Majesty accepted the prize not solely for his contributions but as an acknowledgement of Bhutan's dedication and the support of its people in maintaining ecological harmony.",
                'file_path' => 'images/upload/galleries/kingdom/king2.jpg'
            ),
            array(
                'title' => 'The 4th King King Jigme Singye Wangchuck (1972-2006)',
                'description' => "The visionary monarch also emphasized Gross National Happiness (GNH) as an alternative measure of progress, placing well-being, cultural preservation, and environmental sustainability at the heart of Bhutan's development agenda. GNH ensured that economic growth and development did not come at the expense of the environment and the happiness of the Bhutanese people.Through these pioneering efforts and the leadership of King Jigme Singye Wangchuck, Bhutan achieved its carbon-neutral status and became an inspiration to the global community in the fight against climate change. The Kingdom of Bhutan serves as a shining example of how visionary leadership can make a profound difference in shaping a sustainable and harmonious future for a nation and the world.",
                'file_path' => 'images/upload/galleries/kingdom/king3.jpg'
            ),
            array(
                'title' => 'The 4th King King Jigme Singye Wangchuck (1972-2006)',
                'description' => "GNH originated in Bhutan in 1970s, when His Majesty the fourth king of Bhutan, Jigme Singye Wangchuck, identified GNH as a core value of the Bhutanese way of life. His Majesty said, \"Gross national happiness is more important than gross domestic product.\" It was officially adopted as a national goal in 2008, and its principles have been enshrined in the country's constitution. GNH prioritizes the preservation of Bhutan's lush forests, clean rivers, and diverse wildlife. They set a target to maintain at least 60% forest cover and establish protected areas for wildlife. The third pillar of GNH is called \"Conservation of the Environment.\" This pillar highlights the importance of protecting the environment as a core element of happiness and well-being. This way, GNH serves as an example of how a nation can prioritize both the happiness of its people and the health of the planet.",
                'file_path' => 'images/upload/galleries/kingdom/king4.jpg'
            ),
            array(
                'title' => 'The 5th King King Jigme Khesar Namgyel Wangchuck (2006-present)',
                'description' => "Under the reign of the 5th King, Jigme Khesar Namgyel Wangchuck, Bhutan's commitment to environmental conservation and sustainability has continued to thrive. King Jigme Khesar has actively championed the ideals of Gross National Happiness (GNH), which includes environmental well-being as one of its key pillars. His Majesty has been a vocal advocate for environmental stewardship on the global stage and has encouraged the Bhutanese people to be responsible caretakers of their natural surroundings. The 5th King has also supported initiatives to promote renewable energy and eco-friendly practices, further reinforcing Bhutan's status as a leader in sustainable development and carbon neutrality.",
                'file_path' => 'images/upload/galleries/kingdom/king5.jpg'
            ),
            array(
                'title' => 'The 5th King King Jigme Khesar Namgyel Wangchuck (2006-present)',
                'description' => "His Majesty has shown strong emphasis on addressing climate change in the country. During a visit by the Green Climate Fund delegation in 2018, His Majesty expressed the importance of using science and technology to combat the effects of climate change, which impact agriculture, water security, and community livelihood. GCF has approved substantial financial support for Bhutan, including capacity building, water adaptation planning, low-emission transport, and climate-resilient agriculture. To support Bhutan's ambitious climate goals, the Green Climate Fund (GCF) is investing USD 26.6 million in the \"Bhutan for Life\" project, aimed at promoting nature and forest conservation to help the country remain carbon neutral. These efforts are part of Bhutan's comprehensive approach to addressing climate change and maintaining its unique commitment to gross national happiness.",
                'file_path' => 'images/upload/galleries/kingdom/king6.jpg'
            ),
            array(
                'title' => 'The 5th King King Jigme Khesar Namgyel Wangchuck (2006-present)',
                'description' => "His Majesty the King Jigme Khesar Namgyel Wangchuck received a UNDP Special Recognition Award for his exceptional leadership in advancing human development. The award acknowledges achievements such as championing gross national happiness, leading environmental conservation, and ensuring a smooth transition to democracy. Bhutan, under his guidance, is the only carbon-neutral country globally, reflecting a strong commitment to environmental sustainability. The award was presented by UNDP Administrator Achim Steiner during the 14th Round Table Meeting in Bhutan.",
                'file_path' => 'images/upload/galleries/kingdom/king7.jpg'
            ),
            array(
                'title' => 'The Queen Queen Jetsun Pema Wangchuck (2011-present)',
                'description' => "Her Majesty Queen Jetsun Pema Wangchuck plays a crucial role in addressing climate change and environmental issues in the country. Her Majesty serves as the United Nations Environment Program (UNEP) Ozone Ambassador, highlighting her commitment to global environmental concerns. She holds the position of Royal Patron of the Environment in Bhutan, demonstrating her dedication to environmental conservation within the country.",
                'file_path' => 'images/upload/galleries/kingdom/queen8.jpg'
            ),
            array(
                'title' => 'The Queen Queen Jetsun Pema Wangchuck (2011-present)',
                'description' => "With her support, Bhutan initiated a flagship program on waste management in 2019 and revamped the National Waste Management Strategy. These efforts aim to manage waste effectively and promote cleanliness. Her Majesty's flagship project, OGOP, supports rural farmers by adding value to their products, packaging, marketing, and exporting them. This initiative has promoted Bhutanese food products and boosted small agribusinesses and farming communities. Her leadership and dedication have played a crucial role in preserving Bhutan's natural beauty and contributing to global environmental efforts.",
                'file_path' => 'images/upload/galleries/kingdom/queen9.jpeg'
            )
            
        );

        $kingdom_gallery_1 = new Gallery();
        $kingdom_gallery_1->headline_id = 1;
        $kingdom_gallery_1->position = 2;
        $kingdom_gallery_1->title = 'The Kingdom';
        $kingdom_gallery_1->color = "#F1D651";
        $kingdom_gallery_1->file_path = '/images/upload/kingdom.png';
        $story->cnav_background = "linear-gradient(270deg, #555050 42.11%, rgba(159, 159, 159, 0.00) 101.31%);";
        $kingdom_gallery_1->dark_mode = true;
        $kingdom_gallery_1->save();

        foreach($galleries as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 1;
            $story->gallery_id = $kingdom_gallery_1->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }
    }
}
