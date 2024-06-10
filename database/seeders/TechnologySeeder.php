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
        $technologies = ['js', 'php', 'vue', 'laravel', 'mysql'];
        foreach($technologies as $technology){
            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->description = $faker->text();
            $new_technology->save();
        }
    }
}
