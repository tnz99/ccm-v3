<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;

class FloraPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Main Story
        $story = new Story();
        $story->title = 'FLORA';
        $story->description = "Bhutan's diverse flora thrives across its elevation gradient, from subtropical valleys to snow-capped peaks. With over 5,500 species of vascular plants, including medicinal herbs, alpine flowers, and rare orchids, the country's rugged terrain preserves numerous endemic species, making Bhutan a unique botanical haven.";
        $story->position = 1;
        $story->headline_id = 2; # refer HeadlineSeeder for ID;
        $story->file_path = 'images/upload/flora.png';
        $story->cnav_background = "linear-gradient(270deg, #1347AF 42.11%, rgba(238, 242, 245, 0.27) 101.31%)";
        $story->dark_mode = false;
        $story->save();   
    
        $flora_gallery_1 = new Gallery();
        $flora_gallery_1->headline_id = 2;
        $flora_gallery_1->position = 2;
        $flora_gallery_1->title = 'the BLUE POPPY';
        $flora_gallery_1->file_path = '/images/upload/flora.png';
        $flora_gallery_1->color = "#524266";
        $flora_gallery_1->cnav_background = "linear-gradient(270deg, #1347AF 42.11%, rgba(238, 242, 245, 0.27) 101.31%)";
        $flora_gallery_1->dark_mode = false;
        $flora_gallery_1->save();

        $galleries_1 = array(
            array(
                'title' => 'Scientific name: Meconopsis merakensis',
                'description' => "This herbaceous, monocarpic plant, covered in brown or white spiny hairs, grows 30–60 cm tall. It boasts strap-shaped or linear-oblong basal leaves with wavy margins and bluish to purplish bowl-shaped flowers on short pedicels. Its habitat lies in high-altitude Himalayan areas (3800–4500 m), particularly in isolated regions near Nagula lake. Although rare, it was discovered in the Merak and Sakten region of Trashigang gewog and is strictly protected by the Monpa community in Tawang. Its distribution spans Eastern Bhutan, extending into India.",
                'file_path' => 'images/upload/galleries/flora/poppy.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis Superba (endemic To HAA)',
                'description' => "The meconopsis superba is found in Halakyula, Haa and the flowers are white in colour. This poppy is said to be one and a half metres tall and a plant has an average of about 30 flowers according to the society. The plant is monocarpic and it dies after flowering. It makes an increasing rosette of shortly hairy leaves, silvery grey, and when it gets to flowering size, sends up the tall stem, which is adorned with lovely pure white flowers, each with a most unusual and distinctive dark maroon stigma.",
                'file_path' => 'images/upload/galleries/flora/poppy1.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis napaulensis',
                'description' => "imilar to M. paniculata but more stiffly brownish villous throughout; basal leaves often strongly pinnatisect, segments oblong with throughout; basal petals red, purple of blue; capsules oblong-ellipsoid, 1.5-3 x 1cm. There was a time when one particular blue poppy species, the Meconopsis napaulensis, could be found all over Chelela Pass in Paro. Sadly, according to the Royal Society for the Protection of Nature, they are now scarce.",
                'file_path' => 'images/upload/galleries/flora/poppy2.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis paniculata',
                'description' => "This large monocarpic herb, standing 1-2.5m tall, is covered in soft yellowish villous and minutely stellate-hairy textures. Its elliptic rosette leaves, 30-50 x 8-20cm, are deeply pinnatifid with lobes that are ovate or oblong, coarsely crenate or serrate. Stem leaves are smaller and eventually become sessile. The solitary flowering stem bears numerous pendulous yellow flowers, either single in the upper part or in groups of 2-6 in lower lateral cymes. Each flower has four yellow petals measuring 3-5cm. The ovary is densely hairy, with a stylus and a lobed stigma. Found at over 3200 m above sea level on the way towards Jomolhari base and Soe Yaksa.",
                'file_path' => 'images/upload/galleries/flora/poppy3.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis horridula',
                'description' => "\"Meconopsis horridula\" is a monocarpic plant known for its diverse leaf shapes and arrangements. It produces solitary or clustered blue to reddish-blue flowers on bent stalks, creating a droopy appearance. Its basal leaves form a rosette, about 25 cm long, with spines and variations in shape, while upper leaves resemble bracts. The plant has straw-colored spines on stems and produces reniform dark brown seeds in spiny capsules upon maturity, marking the end of its lifecycle.In Bhutan it was found in Trashi Yangtse Bumdeling Wildlife Sanctuary.",
                'file_path' => 'images/upload/galleries/flora/poppy4.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis gakyidiana',
                'description' => "The Maconopsis gakyidiana was named after the country’s guiding development philosophy Gross National Happiness. Gakyid stands for “Happiness” and diana is the nomenclature term for the flower. Blue poppy also comes in pink, white and red colors and are found in the country. The flower was discovered by British botanist George Sherriff in a remote part of eastern Bhutan during an expedition in the Himalayas. It was found in eastern Bhutan",
                'file_path' => 'images/upload/galleries/flora/poppy5.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis Bhutanica',
                'description' => "Meconopsis bhutanica is endemic to western Bhutan and occurs only in a limited area south of Mt. Chomolhari. The flower colour is pale blue variously tinged with purple. This species had been incorrectly included in M. discigera by Taylor in the past. However, the latter, M. discigera, has pale-yellow flowers. This group (subgenus) of Meconopsis is characterized by the disc-like appendage covering the top of the ovary. It was found at Tsho Phu, Paro district (4400m)",
                'file_path' => 'images/upload/galleries/flora/poppy7.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis Elongata',
                'description' => "Meconopsis elongata is also endemic to western Bhutan, occurring in Haa and adjacent regions of Paro and Thimphu districts. The flower is blue to purple with a reddish tint. The specific name was derived from the elongated, whitish strings of vascular bundles protruding from the tip of the filaments and also from the elongated narrow racemes",
                'file_path' => 'images/upload/galleries/flora/poppy8.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis Bella',
                'description' => "This dwarf herb has a perennial taproot and multiple short stems. It features various-shaped basal leaves (1.5-4 x 0.5-1cm) that can be lobed or divided, mostly hairless but sometimes with a few hairs. Blue flowers, singularly positioned on leafless stems (4-15cm), produce ellipsoid capsules (1.5 x 0.7cm) with 4-7 valves. These capsules open at the top and are held on elongated, curved stems (10-15cm).",
                'file_path' => 'images/upload/galleries/flora/poppy9.png'
            ),
            array(
                'title' => 'Scientific name: Meconopsis ludlowii',
                'description' => "This species was discovered by Ludlow & Sherriff on the Orka La in Bhutan on 10th July 1934 (L& S642), who also recorded it on the Milakatong La four days later and near Lap (L& S728) on 28th July 1934. Seed was collected from both passes in October 1934 (L&S 1080 & 1095). The specimens were identified initially as M. lyrata and then by George Taylor as M. lancifolia var concinna (a rather different Chinese species), and it was called this in ‘A Quest of Flowers’",
                'file_path' => 'images/upload/galleries/flora/poppy10.png'
            )
        );

        foreach($galleries_1 as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 1;
            $story->gallery_id = $flora_gallery_1->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }

        // Gallery 2 
        
        $flora_gallery_2 = new Gallery();
        $flora_gallery_2->headline_id = 2;
        $flora_gallery_2->position = 3;
        $flora_gallery_2->title = 'the RODODENDRONS';
        $flora_gallery_2->color = "#524266";
        $flora_gallery_2->file_path = '/images/upload/flora.png';
        $flora_gallery_2->cnav_background = "linear-gradient(270deg, #1347AF 42.11%, rgba(238, 242, 245, 0.27) 101.31%)";
        $flora_gallery_2->dark_mode = false;
        $flora_gallery_2->save();

        $galleries_2 = array(
            array(
                'title' => 'Scientific name: Rhododendron pogonophyllum Cowan',
                'description' => "It is a creeping subshrub which has similar flowers to that of Rhododendron anthopogon with small obovate leaves with rounded or retuse apex, rounded at base and scaly leaf underside. It is listed as one of the endemic species of rhododendron in Bhutan. It was spotted that species flowering precariously on the rocks and rocky soils on open hillsides at Kyitsugang at an altitude of 4,452 m above sea level. A Scottish plant collector George Sherriff first sighted Rhododendron pogonophyllum at Tangchhu in 1937.",
                'file_path' => 'images/upload/galleries/flora/rho1.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron campanulatum',
                'description' => "Dwarf shrub to a small tree, 0.5–4.5 m. Leaves 7–14 × 3.8–7.5 cm, ovate to broadly elliptic, upper surface glabrous, with a dense fulvous lanate tomentum composed of capitellate to ramiform hairs. Flowers 8–15 in a truss, white to pale mauve or deep plum purple, with purple flecks, open-campanulate, nectar pouches lacking, 30–50 mm; ovary and style glabrous. Flowering April-May. Found in Himalayan alpine regions. It grows in stony slopes and ledges at altitudes of 3000-4500m",
                'file_path' => 'images/upload/galleries/flora/rho2.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron campylocarpum',
                'description' => "Shrub or small tree, 1–6.5 m. Leaves 3.2–10 × 1.5–5 cm, orbicular to elliptic, base cordate, glabrous though rarely with a few glands at base. Flowers 3–10(–15), in a lax to more or less dense truss, pale to sulphur yellow, sometimes tinged with red in bud, with or without a basal blotch, campanulate, nectar pouches lacking, 25–40 mm; ovary densely stalked-glandular, style glabrous. Flowering April-May",
                'file_path' => 'images/upload/galleries/flora/rho3.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron cinnabarinum',
                'description' => "Straggling shrub, up to 7 m; young shoots scaly, often also pruinose. Leaves sometimes deciduous, 3–9 × 2.7–5 cm, broadly or narrowly elliptic, apex rounded, lower surface covered in fleshy narrowly rimmed, equal or unequal scales. Pedicels scaly. Flowers 2–7 per inflorescence, yellow or orange, to purple sometimes bicoloured, yellow and orange, usually with a waxy pruinose bloom, tubular to campanulate, 25–36 mm; stamens 10; ovary scaly, sometimes also puberulous, style usually glabrous. Flowering April-May. Grows at an elevation of 1900–4000 meters. Flowers are yellow to cinnabar red, sometimes ranging to plum colors.",
                'file_path' => 'images/upload/galleries/flora/rho4.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron hodgsonii',
                'description' => "A spectacular shrub with large trusses of pinkish or purplish red flowers which tend to fade, flowering in April. This is one of the hardiest of the big leaved Rhododendrons with smooth peeling bark and large leathery leaves up to 38cm long with a thin indumentum giving a silvery/metallic bloom. The underside of the leaves have an attractive silvery to cinnamon indumentum and young growth is just stunning. Height 150cm in 10 years. Named after B.H. Hodgson, the former East India Company Resident in Nepal. The painting is by Walter Hood Fitch, based Joseph Dalton Hooker's field sketch. It appears in Hooker's landmark book 'Rhododendrons of the Sikkim Himalaya', published in 1849.",
                'file_path' => 'images/upload/galleries/flora/rho5.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron keysii',
                'description' => "it is an evergreen shrub that typically grows to 1–4 m (3.3–13.1 ft) in height, with leathery leaves that are lanceolate-elliptic or lanceolate-oblong in shape, and typically 4–8 × 1–3 cm in size. The flowers are orange or salmon pink to deep red and yellow. This is a very distinctive flowering plant for June-July, with thinly textured leaves and strong and upright habit. Best planted in partial shade, and it does need an open situation to allow lots of air circulation to perform well.",
                'file_path' => 'images/upload/galleries/flora/rho6.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron kesangiae(Endemic to Bhutan)',
                'description' => "Rhododendron kesangiae is a rhododendron species endemic to Bhutan, where it grows at altitudes of 2,890–3,450 m (9,480–11,320 ft) in the fir and hemlock forests.[1] It is called Tala (ཏ་ལ) in Dzongkha. It is a large shrub[2] or tree that typically grows to 15 m (49 ft) in height, with leaves that are broadly elliptic to almost obovate, and 20–30 cm (7.9–11.8 in) long by 10–16 cm (3.9–6.3 in) broad. The flowers are rose pink, fading to purple",
                'file_path' => 'images/upload/galleries/flora/rho7.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron griffithianum Wight',
                'description' => "Griffith's Rhododendron is a shrub or small tree 1.3-4 m tall, found in E Nepal, Bengal, Sikkim, Bhutan and Arunachal Pradesh. Flowers are borne in 4- or 5-flowered umbels, with rachis 5-7 cm. Flowers are bell-shaped, pink at first, later white, 5.5-8 cm, hairless. Petals are 5, nearly circular, about 2 x 3.5 cm, notched, stamens 12-18, ovary ovoid, about 7 mm, glandular; style glandular to tip, stigma swollen. Flowers-stalks are hairless, 3.5-4 cm. Sepal structure is cup-shaped, 7-20 mm. Shoots are about 4 mm in diameter below inflorescence, young shoots stout, hairless. Leaf-stalks are stout, 2-3.5 cm, hairless. Leaf blade is leathery, oblong to oblong-elliptic or oblong-ovate, 10-19 x 4.5-12 cm, base rounded or heart-shaped, tip pointed to rounded and apiculate. Underside is hairless, upper surface is green, smooth, midrib prominent below, grooved above, lateral veins 19-24-paired, distinct on both surfaces. Griffith's Rhododendron is found in eastern Himalayas, at altitudes of 2100-2800 m.",
                'file_path' => 'images/upload/galleries/flora/rho8.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron setosum D. Don',
                'description' => "This is a compact dwarf shrub, ranging from 10-60cm in height, with densely scaly and spreading-bristly young shoots. Its oblong-obovate leaves are small, approximately 0.5-3x0.3-0.6cm, rounded or shallowly retuse, featuring a rounded base and covered with yellowish scales on top and red-brown scales beneath. The apex, margins, and base of the midrib underneath are bristly, while the petioles are about 1mm long. Its racemes are dense and carry 2-5 flowers each. The pedicels are 3-8mm long, scaly, and pubescent. The calyx is deeply 5-lobed, with ovate-elliptic lobes measuring 4-7mm, sometimes exhibiting scales and cilia. The open funnel-shaped corolla is 1.3-1.6cm, varying from pale to deep purple, deeply 5-lobed, and smooth outside. It has 10 exserted stamens with pubescent filaments towards the base. The ovary is pubescent and scaly. The resulting capsules are oblong-ovoid, approximately 5mm in size.",
                'file_path' => 'images/upload/galleries/flora/rho9.png'
            ),
            array(
                'title' => 'Scientific name: Rhododendron lindleyi T. Moore',
                'description' => "Rhododendron lindleyi T.Moore is usually epiphytic with shoots and petioles scaly, not bristly. Leaves elliptic, rounded at apex, pale beneath with conspicuous scattered red scales. Racemes 2-3 flowered. Pedicels scaly; calyx lobes with ciliate margins, otherwise glabrous. Corolla white with golden yellow at base within. Stamens 10; filaments pubescent in lower part. Ovary 5 celled. Found in evergreen oak and Hemlock forests from 2100-2740m. Flowering is between April-May.",
                'file_path' => 'images/upload/galleries/flora/rho10.png'
            )
        );
        
        foreach($galleries_2 as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 1;
            $story->gallery_id = $flora_gallery_2->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }

        $flora_gallery_3 = new Gallery();
        $flora_gallery_3->headline_id = 2;
        $flora_gallery_3->position = 4;
        $flora_gallery_3->title = 'the ORCHID';
        $flora_gallery_3->dark_mode = false;
        $flora_gallery_3->color = "#524266";
        $flora_gallery_3->file_path = '/images/upload/flora.png';
        $flora_gallery_3->cnav_background = "linear-gradient(270deg, #1347AF 42.11%, rgba(238, 242, 245, 0.27) 101.31%)";

        $flora_gallery_3->save();

        $galleries_3 = array(
            array(
                'title' => 'Scientific name: Bulbophyllum punakhaense.',
                'description' => "Bulbophyllum punakhaense is named after Punakha Dzongkhag where it was first spotted and collected the specimen. The maroon blossoms of the orchid are small and delicate, measuring no more than four centimetres in length. The species is found between elevations of 2000 and 2700 m.",
                'file_path' => 'images/upload/galleries/flora/orc1.png'
            ),
            array(
                'title' => 'Scientific name: Bulbophyllum gurungianum',
                'description' => "Bulbophyllum gurungianum is named in honor of Professor Dhan Bdr. Gurung, College of Natural Resources, Lobesa, Punakha Dzongkhag who first discovered the orchid in 2006 and for his immense contribution to the orchid taxonomy in Bhutan. The fspecies is found between elevations of 1400-2000 m.",
                'file_path' => 'images/upload/galleries/flora/orc2.png'
            ),
            array(
                'title' => 'Scientific name: Chiloschista densiflora',
                'description' => "Chiloschista densiflora, named in reference to the densely flowered inflorescences was discovered from Zhemgang in 2014.The species have yellowish flowers with brown spots on the sepals and petals, but differs by the larger flower, with virtually glabrous to indistinctly micro-pubescent sepals and petals. It is mostly found in Trongsa and Zhemgang.",
                'file_path' => 'images/upload/galleries/flora/orc3.png'
            ),
            array(
                'title' => 'Scientific name: Paphiopedilum fairrieanum',
                'description' => "Paphiopedilum fairrieanum, also called Fairrie's Paphiopedilum or Lady's Slipper Orchid, is an orchid species found in Bhutan. It features large, distinctive slipper-shaped flowers in tones of green, yellow, brown, or red. Growing in shaded areas, it contributes to Bhutan's flora and holds cultural significance as a symbol of rare beauty and charm",
                'file_path' => 'images/upload/galleries/flora/orc4.png'
            ),
            array(
                'title' => 'Scientific name: Pleione praecox (Sm.) D.Don',
                'description' => "Pleione praecox is a perennial terrestrial, epiphytic or lithophytic miniature orchid species with big, fragrant flowers. The flowers are quite large with pink petals around a tubular white lip, which is stained deep pink at the mouth and marked internally with yellow. Shortly cylindrical, maroon pseudobulbs, covered by greenish warts, carry 2 apical, narrowly elliptic-lanceshaped, pointed leaves. It is orchid native to the West-Central Himalaya to China, India, Nepal, Vietnam, north Thailand and Myanamar where it grows in primary highland cloud forests on mossy trees and the rocks below them at altitudes of 1500-3400 m. It is a cold growing species found from 1200 to 2500m. Found in Tamala, Zhemgang.",
                'file_path' => 'images/upload/galleries/flora/orc5.png'
            ),
            array(
                'title' => 'Scientific name: Acampe rigida (Buch.-Ham. ex Sm.) P.F.Hunt',
                'description' => "Acampe rigida is a robust species with an unbranched stem up to 1 m (40 in) in length and 20 mm (0.8 in) in diameter. The leaves are distichous. The stem nodes are about 25 mm (1 in) apart and each bears a somewhat fleshy, upright leaf with sheathing base. The apices of the leaves are obtuse and unequally bilobed. The inflorescence is unbranched or sparsely branched, with many slightly fragrant, upturned, cup-shaped flowers less than 25 mm (1 in) in diameter. The petals are fleshy, and are yellow with purplish-brown stripes; they have a thick, white, three-lobed lower lip, and a short spur. They are followed by cylindrical or fusiform capsules. It grows on trees and rocks at altitudes of up to 1,800 m (6,000 ft).",
                'file_path' => 'images/upload/galleries/flora/orc6.png'
            ),
            array(
                'title' => 'Scientific name: Calanthe plantaginea Lindl. 1833',
                'description' => "Found in western Himalayas, eastern Himalayas, Nepal, Bhutan, Sikkim and China in evergrgeen broad-leaved forests at elevations of 1800 to 2500 meters as a medium sized, cool to cold growing terrestrial with conical pseudobulbs carrying 3, elliptic-ovate, plicate, prominently ridged, acute, narrowing below into the petiolate bsae leaves that arise with the leaves in late winter and early spring on a lateral, laxly to subdensely many flowered, ridged, puberulent, 10 to 14.4\" [25 to 36 cm] long, racemose inflorescence with persistent, lanceolate floral bracts and carrying fragrant, pendant flowers.",
                'file_path' => 'images/upload/galleries/flora/orc7.png'
            ),
            array(
                'title' => 'Scientific name: vanda cristata Rchb.f.',
                'description' => "Vanda cristata is a species of orchid found growing in the Himalaya from Bangladesh, India, Nepal, Bhutan to China (northwestern Yunnan) at elevations of 600 – 2300 meters. It is an epiphytic subshrub and grows primarily in the wet tropical biome. with a stout stem carrying coriaceous, recurved, truncately tridentate apically, conduplicate, linear leaves that are articulated basally to the imbricate sheathing leaf bases and blooms in the spring and summer on an axillary, descending, short, few [2 to 6] flowered inflorescence with short, broad bracts that are shorter than the leaves.It has fragrant floral scented, waxy, long-lived flowers with horns on the apex of the lip which is the determining factor between this species and V alpina.",
                'file_path' => 'images/upload/galleries/flora/orc8.png'
            )

        );

        foreach($galleries_3 as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 1;
            $story->gallery_id = $flora_gallery_3->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = false;
            $story->save();
        }

        $flora_gallery_4 = new Gallery();
        $flora_gallery_4->headline_id = 2;
        $flora_gallery_4->position = 5;
        $flora_gallery_4->title = 'the NATIONAL TREE & the HERBS';
        $flora_gallery_4->file_path = '/images/upload/flora.png';
        $flora_gallery_4->color = "#524266";
        $flora_gallery_4->dark_mode = false;
        $flora_gallery_4->cnav_background = "linear-gradient(270deg, #1347AF 42.11%, rgba(238, 242, 245, 0.27) 101.31%)";

        $flora_gallery_4->save();

        $galleries_4 = array(
            array(
                'title' => 'National Tree Cypress',
                'description' => "The Himalayan cypress (Cupressus torolusa) is the national tree of Bhutan. They are associated with religion, and may often be found near the religious structures and in the temperate zone between altitudes of 1800m and 3500m.",
                'file_path' => 'images/upload/galleries/flora/m0.png'
            ),
            array(
                'title' => 'Botanical name: Aquilaria malaccensis',
                'description' => "Bhutan is home to around 300 medicinal plants, the majority of which are harnessed for the production of traditional medicines and herbal teas.
                Local name: Agaru(Dzongkha) and Akuru(Kheng)
                Description: Evergreen tree which grows up to 30-40 meters tall
                Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Zhemgang
                Part used: Wood and Resinous heartwood
                Medicinal value: Nervine and refrigerant for nying-rog(tendons and other connective tissues that connect to the heart)",
                'file_path' => 'images/upload/galleries/flora/m1.png'
            ),
            array(
                'title' => 'Botanical name: Piper pedicellatum',
                'description' => "Pipiling(Dzongkha) and Bordamzalu(Kheng)
                Description: Shrub that grows to 1-2 meters tall. Leaves are simple and oval with white flowers.Fruits areround and green which become blackish when ripe.
                Distribution: Samtse, Chhukha, Sarpang, Trongsa, Trashigang, Zhemgang
                Part used: Fruit
                Medicinal value: Aphrodisiac, blood purifier and haematinic. Allays indigestion, flatulence, and asthma. Expectorant and alleviates dry cough. Heals grang-nad(disorder associated with coldness with symptoms such as backache, abdominal pain, difficulty passing urine) and bad-rlung(complicated disorder arising due to defect in two of the three humors: Phlegm and Air)",
                'file_path' => 'images/upload/galleries/flora/m2.png'
            ),
            array(
                'title' => 'Botanical name: Cassia fistula',
                'description' => "Local name: Donga(Dzongkha) and Dongkashing(Sha)
                Description: Deciduous tree which grows up to 20 meters tall, leaves are opposite and flowers are yellow.Pods are woody and black. Seeds are ovate and in line
                Distribution: Samdrup Jongkhar, Chhukha, Sarpang, Trashigang
                Part used: Seed
                Medicinal value: Purgative, laxative, demulcent and allays liver disorders",
                'file_path' => 'images/upload/galleries/flora/m3.png'
            ),
            array(
                'title' => 'Botanical name: Coriandrum sativum',
                'description' => "Local name: Husu(Dzongkha and Kheng)
                Description: Herb growing up to 60 centimeters tall. Leaves pinnately lobed with white/pinkish flowers.
                Distribution: Almost all parts of Bhutan
                Part used: Seed
                Medicinal value: Lithontriptic and disintegrates small masses in stomach due to defect in bad-kan(Phlegm)",
                'file_path' => 'images/upload/galleries/flora/m4.png'
            ),
            array(
                'title' => 'Botanical name: Cordyceps sinensis',
                'description' => "Local name: Jyar-tsa-guen-bu(Dzongkha)
                Description: Caterpillar shaped roots which is dark brown or black, but can be a yellow color when fresh usually 4–10 centimeters
                Distribution: Thimphu, Bumthang, Trashi Yangtse
                Part used: Whole plant
                Medicinal value: Useful for kidney disorders, general tonic, antipyretic, spermatogenesis",
                'file_path' => 'images/upload/galleries/flora/m5.png'
            ),
            array(
                'title' => 'Botanical name: Panax pseudo ginseng',
                'description' => "
                    Local name: Bingiraza(Dzongkha)
                    Description: Short Herb with oval leaves and bright red/blackish fruit
                    Distribution: Thimphu, Bumthang, Trashigang, Paro, Gasa, Haa
                    Part used: Rhizomes
                    Medicinal value: Provides nourishment, improves immune system, stop or slow down bleeding
                ",
                'file_path' => 'images/upload/galleries/flora/m6.png'
            ),
            array(
                'title' => 'Botanical name: Neopicrorhiza scrophulariiflora',
                'description' => "
                    Local name: Hong-len(Dzongkha)
                    Description: Herb with short leaf blade spatulate to ovate, hairy spike with purplish/black flower
                    Distribution: Thimphu, Bumthang
                    Part used: Rhizomes
                    Medicinal value: Anticoagulant, antidiarrheal, hematinic, depurative and febrifuge
                ",
                'file_path' => 'images/upload/galleries/flora/m7.png'
            ),
            
        );

        foreach($galleries_4 as $index => $gallery) {
            $story = new Story();
            $story->title = $gallery['title'];
            $story->description = $gallery['description'];
            $story->position = $index + 2;
            $story->headline_id = 1;
            $story->gallery_id = $flora_gallery_4->id;
            $story->file_path = $gallery['file_path'];
            $story->dark_mode = true;
            $story->save();
        }
    }
}
