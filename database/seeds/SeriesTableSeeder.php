<?php

use Illuminate\Database\Seeder;
use App\Serie;
use Faker\Generator as Faker;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $new_serie = new Serie();
            $new_serie->titolo = $faker->word;
            $new_serie->trama = $faker->text(1000);
            $new_serie->voto = $faker->numberBetween(1, 10);
            $new_serie->lingua = $faker->randomElement([
                'italiano',
                'inglese',
                'tedesco'
            ]);

            $new_serie->save();
        }
    }
}
