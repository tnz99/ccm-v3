<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class FaunaPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = new Story();
        $story->title = 'Fauna';
        $story->description = "The Kingdom of Bhutan is not only renowned for its breathtaking landscapes but also for its incredible biodiversity. The Kingdom of Bhutan is a sanctuary for a diverse array of wildlife, making it a dream destination for nature enthusiasts and conservationists alike.";
        $story->position = 1;
        $story->headline_id = 3; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/fauna.png';
        $story->dark_mode = true;
        $story->title_text_color = "white";
        $story->description_text_color = "white";

        $story->cnav_background = "linear-gradient(270deg, #4B5E25 42.11%, rgba(174, 177, 127, 0.50) 101.31%)";
        $story->save();   

        $story = new Story();
        $story->title = 'Mammals';
        $story->description = "Bhutan is home to 129 mammal species, including 26 globally endangered ones. Notably, the country hosts 11 out of the 36 known global felid species, with a study in Royal Manas National Park documenting six felid species, comprising about 16 percent of the world's total. This highlights Bhutan's significance as a major habitat and hotspot for wild felids.";
        $story->position = 1;
        $story->headline_id = 3; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/mammal.png';
        $story->dark_mode = true;
        $story->title_text_color = "white";
        $story->description_text_color = "white";
        $story->cnav_background = "linear-gradient(270deg, #eab676 42.11%, rgba(216, 161, 164, 0.56) 101.31%)";
        $story->save(); 

        $mammal_gallery = new Gallery();
        $mammal_gallery->headline_id = 3;
        $mammal_gallery->position = 3;
        $mammal_gallery->title =  'mammals';
        $mammal_gallery->file_path = '/images/upload/mammal.png';
        $mammal_gallery->color = "#eab676";
        $mammal_gallery->dark_mode = true;
        $mammal_gallery->text_color = "white";
        $mammal_gallery->cnav_background = "linear-gradient(270deg, #eab676 42.11%, rgba(216, 161, 164, 0.56) 101.31%)";
        $mammal_gallery->save();

        $mammals_gallery =[
            [
                'title' => 'Takin - Burdorcas Taxicolor',
                'description' => 'the Takin (Burdorcas Taxicolor) holds the esteemed position of being Bhutan\'s national animal, thanks to its deep-rooted connection with Bhutanese religious history and mythology. According to legend, in the 15th century, the Tibetan saint Drukpa Kunley, famously known as "Divine Madman," is said to have created this extraordinary creature. The Takin is a robust and fur-covered animal, possessing a unique appearance that combines elements of both a cow and a goat. It is cherished by the Bhutanese people as one of the country\'s national symbols, owing to its distinctive characteristics and its significant role in Bhutanese culture and heritage.',
                'file_path' => 'images/upload/galleries/fauna/takin.png'
            ],
            [
                'title' => 'Tiger - Panthera Tigris Tigris',
                'description' => 'Bhutan is among the 13 countries that still harbor tiger populations. A recent survey conducted in 2021 and 2022 revealed an estimated 131 tigers in this eastern Himalayan nation. These tigers are classified as endangered and have been spotted at elevations ranging from 150 meters to an impressive 4,200 meters above sea level.',
                'file_path' => 'images/upload/galleries/fauna/tiger.png'
            ],
            [
                'title' => 'Golden Langur - Trachypithecus geei',
                'description' => "Geei's Golden Langur or simply the Golden Langur is a species of primate and an endangered mammal endemic to the Assam and central valleys in Bhutan.",
                'file_path' => 'images/upload/galleries/fauna/golden.png'
            ],
            [
                'title' => 'Hanuman Langur - Semnopithecus entellus',
                'description' => 'Largest of all the langurs of Bhutan, the Grey or Hanuman Langur is found only west of the Sunkosh River and west of the Pelela range in Bhutan. The subspecies in the Himalayas have been called the Himalayan Langur with their distinctive white heads, thick grey coats, and large body size. Their feet, hands, face, and ears are black, and their face is framed with white fur. Their tail is usually longer than the body, with a white tip. Infants are born with fine, dark brown or black fur. Their skin is pale, but darkens to black by three months old. They are sexually dimorphic, with males being slightly larger than females. Males weigh about 13 kg and females weigh about 9.9 kg. Excluding their tail, males are about 64 cm long, and females are about 58.5 cm long. Male Hanuman langur tails average 91.0 cm and those of females average 86 cm. They have 32 teeth. Hanuman langurs are found in a wide variety of habitats, ranging from arid to tropical evergreen rainforests.',
                'file_path' => 'images/upload/galleries/fauna/langur.png'
            ],
            [
                'title' => 'Capped langur - Trachypithecus pileatus',
                'description' => 'The capped langur has been recorded in eight of the 20 dzongkhags of Bhutan. A common primate of eastern Bhutan, recorded it between 100 and a little more than 2,600 m above sea level. Capped Langurs are predominantly arboreal and usually found leaping through the forest canopy where they also forage, rest, feed and play. They are a vocal species and have several different calls within their repertoire. These primates are diurnal and mostly folivorous – they are most active during the day and their diet mainly consists of leaves. They live in groups made up of roughly seven females and one male, and females often share the responsibility of looking after each other’s infants.',
                'file_path' => 'images/upload/galleries/fauna/langur2.png'
            ],
            [
                'title' => 'Snow Leopard - Panthera uncia',
                'description' => 'Bhutan is one of the 12 countries in Asia that harbor endangered Snow leopard population in its natural habitat. The presence of 134 snow leopards has been confirmed in Bhutan by the National Snow Leopard Survey 2022-2023',
                'file_path' => 'images/upload/galleries/fauna/leopard.png'
            ]
        ];

        foreach($mammals_gallery as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 3;
            $story->gallery_id = $mammal_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }

        $story = new Story();
        $story->title = 'Birds';
        $story->description = "Bhutan is recognized as a part of several globally important bird areas. Currently, around 736 species are recorded to be found in Bhutan out of which 30 are globally threatened. Of the four critically endangered species found in Bhutan";
        $story->position = 4;
        $story->headline_id = 3; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/winter.png';
        $story->cnav_background = "linear-gradient(270deg, #4B5E25 42.11%, rgba(174, 177, 127, 0.50) 101.31%)";
        $story->dark_mode = false;
        $story->title_text_color = "white";
        $story->description_text_color = "white";
        $story->save();   

        $bird_gallery = new Gallery();
        $bird_gallery->headline_id = 3;
        $bird_gallery->position = 4;
        $bird_gallery->title = 'birds';
        $bird_gallery->file_path = '/images/upload/winter.png';
        $bird_gallery->color = "#ffffff";
        $bird_gallery->cnav_background = "linear-gradient(270deg, #4B5E25 42.11%, rgba(174, 177, 127, 0.50) 101.31%)";
        $bird_gallery->dark_mode = false;
        $bird_gallery->text_color = 'black';
        $bird_gallery->save();
        
        $birds_gallery = [
            [
                'title' => 'Raven - Corvus Corax Tibetanus',
                'description' => 'The Raven is the Bhutan\'s national bird. It represents one of the most powerful deities of the country, Jarog Dongchen. At one time, it was a capital crime to kill a Raven in Bhutan. One can still see ravens nesting in monasteries and dzongs throughout Bhutan. We can spot a raven at Damthang, Cherithang, Jagothang, Lingshi and Chebesa in Western Bhutan; Bumthang, Dur and Pegula in Central Bhutan and Singye Dzong and surrounding areas in Eastern Bhutan.',
                'file_path' => 'images/upload/galleries/fauna/raven.png'
            ],
            [
                'title' => 'Baer’s Pochard - Aythya baeri',
                'description' => 'The Baer’s Pochard is an extremely rare diving duck. Its head has a dark green gloss, but normally appears as dark brown or black. Their sides have boldly patterned chestnut-and-white shades that are unique among ducks. Can usually find them in Sarpang districts(lowlands large open bodies of water during the winter).',
                'file_path' => 'images/upload/galleries/fauna/bird1.png'
            ],
            [
                'title' => 'Black-necked Stork - Ephippiorhynchus asiaticus',
                'description' => 'Black-necked storks are large in size and has a white lower breast and belly. Its bill and legs are red in colour. They have a black beak, black head, and black neck. Found in tropical wetlands and ponds. It have been recorded for the first time in Wangchuck Centennial National Park (WCNP) in Bumthang.',
                'file_path' => 'images/upload/galleries/fauna/bird2.png'
            ],
            [
                'title' => 'Black-necked Crane - Grus nigricollis',
                'description' => 'The black-necked cranes have a pale body and a black neck, as per the name. On their head is a patch of red skin and they have elongated feathers above their tail.In November every year, the Bhutanese celebrate the Black-necked Crane Festival to create awareness on protecting the endangered black-necked cranes. During the festival, they sing folk songs and perform dances with a black-necked crane theme. School children also stage skits on environmental conservation.',
                'file_path' => 'images/upload/galleries/fauna/bird3.png'
            ],
            [
                'title' => 'White-bellied Heron - Ardea insignis',
                'description' => 'This species of herons are extremely rare. They have dark grey wings, a pale throat patch, and a white belly. Listed as critically endangered on the IUCN Red List since 2007, its total global population is estimated to be only 50-249 adult birds, and numbers are declining even further. White-bellied herons were sighted in 10 locations in the 2021 survey by RSPN Bhutan: six of these were in the Punatsangchhu River basin in western Wangduephodrang district, where 14 individuals were recorded in total. The other four locations were in the Mangdechhu River basin in the central Trongsa district, where eight herons were seen. However, for the first time in 19 years, no white-bellied herons were sighted in the Pochu and Mochu river basins in the Punakha district, which once hosted the biggest and oldest known population in Bhutan.',
                'file_path' => 'images/upload/galleries/fauna/bird4.png'
            ],
            [
                'title' => 'Wood Snipe - Gallinago nemoricola',
                'description' => 'This is a rare snipe, with intricate black, brown, and white patterns all over its body. You may find them in wet alpine meadows where they breed, or pools and marshes where they spend the winter. They were found in Phobjikha Valley. The Wood Snipe (Gallinago Nemoricola), an endangered species, which used to be found in marshy areas around Thimphu are no more seen today according to the Royal Society for the Protection of Nature.',
                'file_path' => 'images/upload/galleries/fauna/bird5.png'
            ],
            [
                'title' => 'Rufous-necked Hornbill - Aceros nipalensis',
                'description' => 'The rufous-necked hornbill has broad dark grooves on its upper beak. It is found out that, it can tolerate or survive certain degree of human disturbances provided there are enough resources available such as potential nesting and food trees in the habitat, according to a study. Males of this species have a reddish-brown head, neck and underparts, whereas its females are black in colour. In Bhutan, Rufous-necked Hornbill is reported from Samtse, Chhukha, Trashigang, Zhemgang, Monggar, SamdrupJongkhar, Sarpang Districts, along PunatshangChhu, and mostly from Wildlife Sanctuaries and National Parks.',
                'file_path' => 'images/upload/galleries/fauna/bird6.png'
            ],
            [
                'title' => 'Great Hornbill - Buceros bicornis',
                'description' => 'The great hornbill has a large, curved yellow beak. Its black face and wings contrast its white tail, belly, and neck. It is found in undisturbed evergreen forest at up to 2,000 metres. It was found in Royal Manas Park.',
                'file_path' => 'images/upload/galleries/fauna/bird7.png'
            ],
            [
                'title' => 'Eurasian Curlew - Numenius arquata',
                'description' => 'These are large shorebirds with a brown body, a long curved beak, and mostly white underwings. You may find them in grasslands and marshes. It was found around Punatsangchu and Wangdue Phodrang.',
                'file_path' => 'images/upload/galleries/fauna/bird8.png'
            ],
            [
                'title' => 'Ferruginous Duck - Aythya nyroca',
                'description' => 'The ferruginous duck has a rich rusty-brown appearance with a white triangular patch under its tail. It also has a peaked crown and a long grey beak. The females are duller and browner than the males. The male has a yellow eye and the females have a dark eye. It is one of the endangered species found in Bhutan near Punatsangchu Area.',
                'file_path' => 'images/upload/galleries/fauna/bird10.png'
            ]
        ];

        foreach($birds_gallery as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 3;
            $story->gallery_id = $bird_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->title_text_color = "white";
            $story->description_text_color = "white";
            $story->save();
        }

        $butterfly_gallery = new Gallery();
        $butterfly_gallery->headline_id = 3;
        $butterfly_gallery->position = 6;
        $butterfly_gallery->title = 'Butterfiles';
        $butterfly_gallery->file_path = '/images/upload/mammal.png';
        $butterfly_gallery->color = "#ffffff";
        $butterfly_gallery->text_color = "black";
        $butterfly_gallery->dark_mode = true;
        $butterfly_gallery->cnav_background = "linear-gradient(270deg, #4B5E25 42.11%, rgba(174, 177, 127, 0.50) 101.31%)";
        $butterfly_gallery->save();

        $butterflies_gallery = [
            [
                'title' => 'Ludlow’s Bhutan Glory',
                'description' => 'It is a Bhutan’s national butterfly which is identified as endangered species. It was officially declared as Bhutan’s national butterfly in 2012. It is found at an altitude of 2000 to 2500 meters. It is spotted commonly in Trashi Yangtsi Valley during Autumn season.',
                'file_path' => 'images/upload/galleries/fauna/b1.png'
            ],
            [
                'title' => 'Japanese Awlking',
                'description' => 'The Japanese Awlking (Choaspes benjaminii japonica) is a butterfly species found in Bhutan and various parts of Asia. With a wingspan of around 3-4 centimeters, it showcases brown and orange hues on its wings. These butterflies are known for their rapid and elusive flight patterns. They inhabit diverse environments, including forests, gardens, and open spaces. Their life cycle involves stages of egg, larva (caterpillar), pupa (chrysalis), and adult. They likely contribute to pollination as they feed on nectar from flowers, adding to Bhutan\'s rich insect diversity and playing a role in local ecosystems.',
                'file_path' => 'images/upload/galleries/fauna/b2.png'
            ],
            [
                'title' => 'Common Blue Apollo',
                'description' => 'The Common Blue Apollo (Parnassius hardwickii) is a large and striking butterfly species found in Bhutan. It boasts a wingspan ranging from 6 to 9 centimeters, featuring white wings adorned with bold black veins and patterns, often complemented by blue or iridescent tones. These butterflies inhabit mountainous landscapes, favoring alpine meadows and higher elevations. Their life cycle involves stages of egg, larva, pupa, and adult, with larvae likely feeding on specific plants and adults primarily feeding on flower nectar. Due to habitat loss and environmental changes, conservation efforts are crucial to protect these impressive butterflies and their habitats in Bhutan.',
                'file_path' => 'images/upload/galleries/fauna/b3.png'
            ],
            [
                'title' => 'Purple and Purple',
                'description' => 'The Purple Sapphire butterfly, also known as "Purple and Purple," is found in Bhutan. It features stunning wings with vibrant purple-blue hues and a shimmering iridescence. These butterflies are relatively small, with a wingspan of 2 to 3 centimeters. They inhabit various landscapes, favoring forest edges and open spaces in hilly regions.',
                'file_path' => 'images/upload/galleries/fauna/b4.png'
            ],
            [
                'title' => 'Narrow-banded Satyr',
                'description' => 'Aulocera brahminus, the narrow-banded satyr, is a brown (Satyrinae) butterfly that is found in the Himalayas. The species was first described by Émile Blanchard in 1853. The Barrow-banded Satyr is a robust Himalayan butterfly, spanning between 55 to 68 mm in wingspan. Its upper wings are black or very dark brown with a distinctive white band crossing both wings. The hindwing band is narrow and uniform in width. The forewings showcase 1 to 4 white discal spots arranged in a line along the inner edge. There\'s a dark apical spot or ocellus on the forewing. The wings have rounded edges with a convex termen and checkered fringes. Beneath, the hindwings exhibit a dark background with less prominent but beautiful white variegations.',
                'file_path' => 'images/upload/galleries/fauna/b5.png'
            ],
            [
                'title' => 'Pointed Perrot',
                'description' => 'The male of this butterfly has a vivid violet upper side with a radiant shine, marked by dark brown borders on the forewing\'s costa and termen, and similar edging on the hindwing. Its underside is a dull whitish color on the forewing, while the hindwing exhibits brown markings in spots, lines, and bands, some nearly black. The butterfly\'s body parts—antennae, head, thorax, and abdomen—are mostly brown, occasionally showing a purplish hue in fresh specimens, with the undersides of the palpi, thorax, and abdomen appearing dingy brownish-white.The female\'s upper side is predominantly brown. On the forewing, the costal and terminal margins are darker, with a dark basal area and a posterior discal series of dark brown spots. Between these areas, dingy white patches appear. The hindwing displays a series of white spots and inwardly conical very dark brown spots, edged narrowly with white. Both wings have slender black anteciliary lines. The underside is purer white compared to the male, with similar markings but narrower and more distinct. Body parts like antennae, head, thorax, and abdomen are brown, lighter than in males, lacking the purplish tint on the thorax. The undersides of the palpi, thorax, and abdomen are white.',
                'file_path' => 'images/upload/galleries/fauna/b6.png'
            ],
            [
                'title' => 'Brown Onyx',
                'description' => 'Horaga viola, commonly known as the Brown Onyx, is a butterfly found in Bhutan. It has a wingspan of around 35 to 50 millimeters, displaying dark brown or blackish wings with distinct light markings. Found in diverse habitats, it undergoes complete metamorphosis and contributes to local ecosystems as a pollinator.',
                'file_path' => 'images/upload/galleries/fauna/b7.png'
            ],
            [
                'title' => 'Parantica aglea (Stoll, 1782)',
                'description' => 'Parantica aglea, commonly called the Glassy Tiger, is a butterfly in Bhutan. It has a wingspan of 70 to 80 millimeters and is known for its translucent wings with black veins resembling glass. Found in diverse habitats, it undergoes complete metamorphosis, feeding on specific plants as caterpillars and nectar as adults. While not generally endangered, local threats to their habitats can impact populations.',
                'file_path' => 'images/upload/galleries/fauna/b8.png'
            ],
            [
                'title' => 'Danaus genutia Cramer, 1779',
                'description' => 'Danaus genutia, known as the Common Tiger, is a butterfly found in Bhutan. It features a wingspan of 75 to 95 millimeters, displaying striking orange wings with black stripes and white markings. These butterflies inhabit various environments across Bhutan, undergo complete metamorphosis, and contribute to the ecosystem as pollinators. While not generally endangered, local threats can affect their populations.',
                'file_path' => 'images/upload/galleries/fauna/b9.png'
            ]
        ];
        

        foreach($butterflies_gallery as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 3;
            $story->gallery_id = $butterfly_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->title_text_color = "white";
            $story->description_text_color = "white";
            $story->save();
        }

        $park_gallery = new Gallery();
        $park_gallery->headline_id = 3;
        $park_gallery->position = 7;
        $park_gallery->title = 'Park';
        $park_gallery->file_path = '/images/upload/mammal.png';
        $park_gallery->color = "#000000";
        $park_gallery->text_color = "white";
        $park_gallery->dark_mode = true;
        $park_gallery->cnav_background = "linear-gradient(270deg, #4B5E25 42.11%, rgba(174, 177, 127, 0.50) 101.31%)";
        $park_gallery->save();

        $parks_gallery = [
            [
                'title' => 'Wangchuck Centennial National Park',
                'description' => 'It is located in northern Bhutan and is the largest protected area of 4914 square kilometers. The park area covers the popular districts of Gasa, Trongsa, Bumthang, Lhuntse and Wangdue Phodrang. It was established in honour of Wangchuck Dynasty, founded in 1907 for selflessly leading Bhutan for a century. The park accommodates nearly 244 species of rare vascular plants, 23 species of large mammals and 134 species of migratory and local birds.',
                'file_path' => 'images/upload/galleries/fauna/park1.png'
            ],
            [
                'title' => 'Jigme Dorji National Park',
                'description' => 'It is located in the northwestern part of the country and is the second largest national park in Bhutan. The national park is spread across an area of 4349sq km covering the districts of Gasa, Thimphu, Paro, Wangduephodrang and Punakha. It is named after the late king Jigme Dorji Wangchuck and it was established in 1974.',
                'file_path' => 'images/upload/galleries/fauna/park2.png'
            ],
            [
                'title' => 'Jigme Singye Wangchuck National Park',
                'description' => 'It is the third largest park in the country covering an expanse of 1,723 sq. km. The park covers partially 5 of the districts - Tsirang, Sarpang, Wangduephodrang, Zhemgang and Trongsa. It is popular for an old chir pine forest.',
                'file_path' => 'images/upload/galleries/fauna/park3.png'
            ],
            [
                'title' => 'Royal Manas National Park',
                'description' => 'It is the fourth largest national park in the country covering an area of 1057 sq km. The Royal Manas National Park covers most of the Sarpang district, the western half of Zhemgang district, and western Pemagatshel district in Bhutan.',
                'file_path' => 'images/upload/galleries/fauna/park4.png'
            ],
            [
                'title' => 'Phrumsengla National Park',
                'description' => 'It is located in the eastern Bhutan within the boundaries of four districts, Bumthang, Mongar, Lhuentse and Zhemgang. The park covers a total area of 905 square kilometres.',
                'file_path' => 'images/upload/galleries/fauna/park5.png'
            ],
            [
                'title' => 'Jigme Khesar Strict Nature Reserve',
                'description' => 'It is located in the northwest corner of the country and it covers 609.51 square kilometres, occupying most areas of Haa and Samtse districts. It is the only strict nature reserve or protected area in Bhutan that is uninhabited. The reserve grows only endemic poppies, the White Poppy.',
                'file_path' => 'images/upload/galleries/fauna/park6.png'
            ],
            [
                'title' => 'Sakteng Wildlife Sanctuary',
                'description' => 'It is located in the easternmost part of the country in Trashigang district. It encompasses a total area of 740.60 square kilometers covering almost three fourth of Merak and Sakteng under Trashigang and part of Lauri under Samdrup Jongkhar. It is one of Bhutan\'s protected areas. It was created in part to protect the migoi, a yeti-like creature whose existence remains unverified. Yeti is a mysterious creature said to live in the mountains and believed to be 8 feet tall, shaggy ape-man with huge feet and walks backwards.',
                'file_path' => 'images/upload/galleries/fauna/park7.png'
            ],
            [
                'title' => 'Bumdeling Wildlife Sanctuary',
                'description' => 'It is located in the northeastern part of Bhutan, covering most of Tashi Yangtse district and parts of Lhuentse, and Mongar.  The sanctuary is spread in an area of 1538 sq. km.',
                'file_path' => 'images/upload/galleries/fauna/park8.png'
            ],
            [
                'title' => 'Phibsoo Wildlife Sanctuary',
                'description' => 'It is the second-smallest national park in Bhutan, encompassing an area of 269 square kilometres.  It is located in the Himalayan foothills of south-central Bhutan, (western Sarpang district and south-eastern Dagana district). There are about 637 species of flowering plants, 28 species of mammals and 132 species of birds recorded.',
                'file_path' => 'images/upload/galleries/fauna/park9.png'
            ],
            [
                'title' => 'Jomotshangkha Wildlife Sanctuary',
                'description' => 'It was previously known as Khaling Wildlife Sanctuary is located in south eastern Bhutan covering an area of 334.73 square kilometres. It lies entirely in Samdrup Jongkhar district. The sanctuary is one of the smallest protected areas after the Phibsoo Wildlife Sanctuary and it is the only non-operational park in Bhutan.',
                'file_path' => 'images/upload/galleries/fauna/park10.png'
            ]
        ];
        
        foreach($parks_gallery as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 3;
            $story->gallery_id = $park_gallery->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }
        
    }
}
