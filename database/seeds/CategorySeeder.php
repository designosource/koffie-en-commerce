<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $category = [
            [
                'name' => 'financieren',
                'description' => 'Je moet altijd eerst iets maken voor je het kan terugverdienen.
                Bij mediaprojecten is de opstartkost één van de grootste struikelblokken die duurzaam succes in de weg staan.
                Hoe kan je de soms grote kloof dichten tussen het maken van inhoud maken en het kunnen afleveren en centen
                verdienen met het resultaat?
Laat je inspireren door de clips en informatie onder het thema ‘financieren’ over onderwerpen als:
	•	Publieke financieringsbronnen
	•	Private financieringsbronnen
	•	Crowdfunding
	•	Etc.',
                'slug' => 'financieren'
            ],
            [
                'name' => 'produceren',
                'description' => 'description',
                'slug' => 'produceren'
            ],
            [
                'name' => 'vermarkten',
                'description' => 'description',
                'slug' => 'vermarkten'
            ],
            [
                'name' => 'juridisch scherpstellen',
                'description' => 'description',
                'slug' => 'juridisch_scherpstellen'
            ],
            [
                'name' => 'internationaliseren',
                'description' => 'description',
                'slug' => 'internationaliseren'
            ],
            [
                'name' => 'ondernemen',
                'description' => 'description',
                'slug' => 'ondernemen'
            ]
        ];

        DB::table('categories')->insert($category);
    }
}
