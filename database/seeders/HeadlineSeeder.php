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
            array('id' => 1, 'title' => 'The Kingdom'),
            array('id' => 2, 'title' => 'The Flora'),
            array('id' => 3, 'title' => 'The Fauna'),
            array('id' => 4, 'title' => 'The Climate'),
            array('id' => 5, 'title' => 'The Change'),
            array('id' => 6, 'title' => 'The Laws'),
            array('id' => 7, 'title' => 'The People'),
        );   

        foreach($headlines as $headline) {
            Headline::create($headline);
        }
    }
}
