<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Headline;

class HeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $headlines = array(
            array('id' => 1, 'title' => 'Kingdom'),
            array('id' => 2, 'title' => 'Flora'),
            array('id' => 3, 'title' => 'Fauna'),
            array('id' => 4, 'title' => 'Climate'),
            array('id' => 5, 'title' => 'Change'),
            array('id' => 6, 'title' => 'Laws'),
            array('id' => 7, 'title' => 'People'),
        );   

        foreach($headlines as $headline) {
            Headline::create($headline);
        }
    }
}
