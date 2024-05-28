<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class PeoplePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = new Story();
        $story->title = 'People';
        $story->description = "The Kingdom of Bhutan is a land of remarkable climatic diversity. Despite its relatively small size, this enchanting country encompasses a wide range of climates, from subtropical valleys to high-altitude alpine regions. This climatic diversity adds to the nation's allure, making it a captivating destination for adventurers and nature enthusiasts.";
        $story->position = 1;
        $story->headline_id = 7; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/people.png';
        $story->cnav_background = "inear-gradient(270deg, #346D6C 42.11%, rgba(135, 176, 175, 0.47) 101.31%)";
        $story->dark_mode = true;
        $story->save();

        $people_gallery = new Gallery();
        $people_gallery->headline_id = 7; # refer HeadlineSeeder for ID;
        $people_gallery->position = 2;
        $people_gallery->title = 'The People';
        $people_gallery->color = "#0E4A47;";
        $people_gallery->file_path = '/images/upload/people.png';
        $people_gallery->dark_mode = true;
        $people_gallery->cnav_background = "inear-gradient(270deg, #346D6C 42.11%, rgba(135, 176, 175, 0.47) 101.31%)";
        $people_gallery->save();

        $galleries = array(
            array(
                'title' => 'Bhutan Celebrates Newborn Prince by Planting 108,000 Trees',
                'description' => "Tens of thousands of citizens in Bhutan celebrated Prince Jigme Namgyel Wangchuck's birth by planting 108,000 tree saplings, each symbolizing longevity, health, beauty, and compassion in Buddhism. The initiative, known as Tendrel, involved all 82,000 households in the country and 26,000 trees planted by volunteers. Each sapling carries a prayer and wish for the prince's health and wisdom. Bhutan's deep connection with trees is rooted in Buddhism, where trees are seen as providers of life. In 2015, Bhutan set a Guinness World Record by planting nearly 50,000 trees in just one hour.",
                'file_path' => 'images/upload/galleries/people/people1.webp'
            ),
            array(
                'title' => 'Royal Bhutan Flower Exhibition',
                'description' => "The Royal Bhutan Flower Exhibition is an annual event initiated by the Ministry of Agriculture and Forests, following a Royal Command, aimed at fostering appreciation for beautiful spaces and promoting horticulture and floriculture-based economy. It was first held in 2015 and is of national significance, aligned with the vision of making Bhutan a clean, safe, well-organized, and beautiful place. The exhibition showcases Bhutan's rich flora and fauna through creative flower installations and models of historic Bhutanese structures like Taktshang monastery and Punakha dzong.",
                'file_path' => 'images/upload/galleries/people/people2.jpeg'
            ),
            array(
                'title' => 'Ozone layer celebration',
                'description' => "On September 16, 2019, Bhutan marked World Ozone Day with the theme \"32 Years and Healing.\" The celebration took place nationwide in collaboration with Dzongkhag Officials, Scouts Associations, and Students. The main objectives were to raise mass awareness about this important issue, especially in remote areas, and to emphasize the involvement of students in spreading the message. The National Ozone Unit and National Environment Commission Secretariat provided technical and financial support for the event, including information materials and training for Scout Students to develop awareness materials in the week leading up to World Ozone Day.",
                'file_path' => 'images/upload/galleries/people/people3.jpeg'
            ),
            array(
                'title' => 'June 2 Social Forestry Day',
                'description' => "Every year on June 2nd, Bhutan celebrates Social Forestry Day, a nationwide event dedicated to environmental protection and fighting climate change. Communities come together to plant trees, symbolizing their commitment to preserving nature. This event involves the government, local organizations, schools, and individuals, highlighting Bhutan's dedication to environmental stewardship. Through tree planting and related activities, Bhutan emphasizes environmental responsibility, emphasizing trees' role in carbon sequestration, biodiversity promotion, and ecological balance maintenance. This annual celebration showcases Bhutan's commitment to leading in environmental conservation for a sustainable future.",
                'file_path' => 'images/upload/galleries/people/people4.jpeg'
            ),
            array(
                'title' => 'Climate change and its impacts on migration pattern among highlanders: Denkars Getaway',
                'description' => "In the higher elevations of Bhutan, particularly in places like Laya and Sakteng, nomads and highlanders are grappling with the impacts of climate change. Traditionally, highlanders would migrate to lower altitudes during harsh winters, seeking refuge in places like Punakha. However, climate change has disrupted this pattern, forcing nomads to frequently move in search of pastureland and water for their yaks and cattle. This shift in migration patterns is explored in the documentary \"Climate Change and its Impacts on Mountain Pastern Among Highlanders.\" The film, funded by BMF's Climate Change Reporting Grant, sheds light on how climate change is altering life in Sakteng, with testimonies from village leaders and nomads who have experienced these changes for over 30 years. Despite being among the most vulnerable to climate impacts, these mountain communities endure the threats they did not cause, emphasizing the need for awareness and support.",
                'file_path' => 'images/upload/galleries/people/people5.jpg'
            ),
            array(
                'title' => 'Sustinable Lifestyle',
                'description' => "In Bhutanese towns and villages, individuals are embracing sustainable lifestyles. From using energy-efficient appliances to practicing mindful consumption, the people of Bhutan understand that small, everyday choices collectively contribute to a carbon-neutral lifestyle. Moreover, communities actively engage in tree planting initiatives, turning barren areas into green spaces that act as carbon sinks and contribute to overall environmental health.",
                'file_path' => 'images/upload/galleries/people/people6.jpg'
            ),
            array(
                'title' => "Jamyang's Climate Crusade: Spreading Awareness Across Bhutan",
                'description' => "Jamyang, an actor, filmmaker, and environmental advocate, started a campaign in Bhutan to raise awareness about climate change. He visited schools, collected letters, and covered 15 dzongkhags. Due to fund constraints, he couldn't cover all 20 dzongkhags or get approval to visit some schools. Jamyang's campaign aimed to spread three key messages: plant trees and take care of them, transition to renewable energy, and include climate studies in the school curriculum. He used an electric car and a small team to film the campaign on mobile phones.",
                'file_path' => 'images/upload/galleries/people/people7.jpg'
            ),
            array(
                'title' => 'Bhutan’s tree warrior: Spreading life in the world’s most climate conscious nation',
                'description' => "In Thimphu, Bhutan's capital, Sonam Phuntsho, a retired Bhutanese man, exemplifies the nation's commitment to environmental protection. For over 50 years, Sonam has dedicated himself to planting trees, covering 10 kilometers daily to rejuvenate degraded forest areas. His commitment is extraordinary; with each step, he carries saplings and purpose. Sonam's efforts have transformed neglected spaces into thriving green havens. Over his lifetime, he planted 100,000 trees, a testament to his unwavering dedication. Sonam embodies Bhutan's dedication to preserving its natural heritage. The constitutional mandate, requiring 60% forest cover, is a way of life embraced by individuals like him. His remarkable story symbolizes Bhutanese commitment to a green and sustainable future.",
                'file_path' => 'images/upload/galleries/people/people8.avif'
            ),
            array(
                'title' => "Former PM Tshering Tobgay’s talk on Bhutan's Pioneering Efforts in Climate Change Mitigation.",
                'description' => "Former Bhutanese Prime Minister Dasho Tshering Tobgay's 2016 Ted Talk showcased Bhutan's pioneering efforts in addressing climate change. He emphasized the country's commitment to becoming carbon-negative, focusing on actively removing carbon from the atmosphere in addition to reducing emissions. He highlighted Bhutan's unique position as a carbon sink, with its extensive forest cover and dedication to maintaining at least 60% forested area. His advocacy for sustainable development through renewable energy sources and the Gross National Happiness index inspired global discussions on innovative climate solutions. His efforts and Bhutan's commitment to carbon negativity have significantly influenced international climate policies, positioning the country as a role model for sustainable development and environmental conservation.",
                'file_path' => 'images/upload/galleries/people/people9.jpg'
            ),
            array(
                'title' => 'Namgay Choden',
                'description' => "Namgay Choden's work as a climate advocate and negotiator has been instrumental in mobilizing international resources to help Bhutan mitigate the impacts of climate change. Her involvement in the Bhutan Climate Futures Lab has engaged over 400 Bhutanese youth in climate policy, inspiring and empowering them to take action. Through her leadership in the Global Shapers Thimphu Hub, she has driven positive transformation in Bhutan and inspired the next generation to demand large-scale societal change. Choden's commitment to ensuring the sustainable future of Bhutan serves as an inspiration to young leaders globally.",
                'file_path' => 'images/upload/galleries/people/people10.jpg'
            ),
            array(
                'title' => 'Bhutan Celebrating earth hour',
                'description' => "Bhutan participated in Earth Hour, a global event promoting nature conservation, in 2012, with various groups, schools, and residents participating. The event, organized by the National Environment Commission and the World Wildlife Fund, aimed to raise awareness about waste reduction and environmental issues. Bhutan's participation in this hour of darkness demonstrates its commitment to fostering a more sustainable",
                'file_path' => 'images/upload/galleries/people/people11.jpeg'
            )
        );

        foreach($galleries as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 5; # refer HeadlineSeeder for ID;
            $story->gallery_id = $people_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }
    }
}
