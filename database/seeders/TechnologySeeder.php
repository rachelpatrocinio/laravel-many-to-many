<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
        [
            'name'=>'js',
            'thumb' => 'js.png'
        ],
        [
            'name'=>'php',
            'thumb' => 'php.png'
        ],
        [
            'name'=>'vue',
            'thumb' => 'vue.png'
        ],
        [
            'name'=>'laravel',
            'thumb' => 'laravel.png'
        ],
        [
            'name'=>'mysql',
            'thumb' => 'mysql.png'
        ],
        [
            'name'=>'html',
            'thumb' => 'html-5.png'
        ],
        [
            'name'=>'css',
            'thumb' => 'css-3.png'
        ]
    ];
        foreach($technologies as $technology){
            $new_technology = new Technology();
            $new_technology->name = $technology['name'];
            $new_technology->description = $faker->text();
            $new_technology->thumb = $technology['thumb'];
            $new_technology->save();
        }
    }
}
