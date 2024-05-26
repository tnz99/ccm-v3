<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Story;
use App\Models\Gallery;
use App\Models\Timeline;


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
        $story->dark_mode = false;
        $story->save();

        $timeline = new Timeline();
        $timeline->headline_id = 6;
        $timeline->save();

        // Timeline story start
        $story = new Story();
        $story->headline_id = 6;
        $story->timeline_id = $timeline->id;
        $story->dark_mode = false;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '1995';
        $story->sub_title = "Bhutan's Forest and Nature Conservation Act - Conservation and sustainable management of Bhutan's forests.";
        $story->description = "The act has helped in the conservation and sustainable management of Bhutan's forests, which cover over 70% of the country's land area. Bhutan has maintained a high forest coverage, which contributes to carbon sequestration and helps mitigate climate change. The act has facilitated the protection of biodiversity, including endangered species like the Bengal tiger and snow leopard.";
        $story->file_path = 'images/upload/law.png';
        $story->save();
        // Timeline story end

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2001';
        $story->sub_title = "The Alternative Renewable Energy Policy - “Encouraging the use of alternative renewable energy sources such as solar, wind, embedded hydro, and biogas.”";
        $story->description = "Helped Bhutan diversify its fuel mix and maintain its net-zero carbon emissions. Bhutan's electricity access rate improved from 61 per cent in 2006 to almost cent per cent in 2019, well ahead of the intended 2020 target.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2009';
        $story->dark_mode = false;
        $story->sub_title = "Bhutan Climate Change Policy (BCCP) - Addressing climate change and promoting sustainable development.";
        $story->description = "The policy has guided Bhutan's efforts in addressing climate change and promoting sustainable development. Bhutan has committed to remaining carbon neutral by maintaining its forest cover and utilizing renewable energy sources. The BCCP has facilitated the integration of climate change considerations into national development plans and policies.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2010';
        $story->sub_title = "Bhutan National Environment Strategy (NES) - Comprehensive framework for environmental conservation and sustainable development.";
        $story->description = "Bhutan National Environment Strategy (NES) - Comprehensive framework for environmental conservation and sustainable development.The NES provides a comprehensive framework for environmental conservation and sustainable development in Bhutan. It has helped in the effective management of natural resources and the protection of Bhutan's unique ecosystems. The NES has promoted sustainable agriculture practices, waste management, and the conservation of water resources.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2011 - 2013';
        $story->sub_title = "Bhutan Climate Change Policy - Reducing greenhouse gas emissions and enhancing resilience.";
        $story->description = "The BCCAP outlined specific actions to address climate change impacts, such as promoting energy efficiency and sustainable transportation. It has contributed to the development and implementation of climate change mitigation and adaptation projects in Bhutan. The BCCAP has enhanced awareness and capacity building on climate change issues among various stakeholders.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2015';
        $story->sub_title = "Bhutan's Intended Nationally Determined Contributions (INDCs) - Commitments to reduce emissions and adapt to climate change.";
        $story->description = "The INDCs demonstrate Bhutan's commitments to reducing greenhouse gas emissions and adapting to climate change. Bhutan aims to remain carbon neutral by maintaining its forest cover and implementing renewable energy projects. The INDCs have provided a framework for Bhutan's climate change actions and helped mobilize international support and funding.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2016';
        $story->sub_title = "Bhutan's National Adaptation Plan (NAP) - Enhancing resilience and reducing vulnerability.";
        $story->description = "0% emissions: a net carbon sink. 3 NAPA projects 10 adaptation needs identified in Nationally Determined Contribution (NDC). 2% national budget on climate change (2012-2013). 4 NAP Consultation Workshops held.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2017';
        $story->sub_title = "Bhutan's Forest and Nature Conservation Rules and Regulations - Guidelines for sustainable forest management.";
        $story->description = "Helped in maintaining sustainable forest management, carbon sequestration, biodiversity conservation, and climate change adaptation in Bhutan";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2018';
        $story->sub_title = "Bhutan's Renewable Energy Policy - Increasing the share of renewable energy sources.";
        $story->description = "Installed capacity of 2.33 GW, Bhutan over the years has successfully developed its hydropower resources, much of which is exported to India. The Bhutan Renewable Energy Master Plan estimates that the country could produce 12 gigawatts of solar and 760 megawatts of wind energy.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2019';
        $story->sub_title = "Bhutan's National REDD+ Strategy - Reducing emissions through forest conservation.";
        $story->description = "Helped reducing emissions through forest conservation.";
        $story->file_path = 'images/upload/law.png';
        $story->save();

        $story = new Story();
        $story->headline_id = 6;
        $story->dark_mode = false;
        $story->timeline_id = $timeline->id;
        $story->cnav_background = "linear-gradient(270deg, #7C745C 42.11%, rgba(255, 234, 172, 0.55) 101.31%)";
        $story->title = '2020';
        $story->sub_title = "The Climate Change Policy of the Kingdom of Bhutan - Sustainable development and carbon neutrality.";
        $story->description = "Helping to maintain sustainable development and the goal of achieving carbon neutrality.";
        $story->file_path = 'images/upload/law.png';
        $story->save();
    }
}
