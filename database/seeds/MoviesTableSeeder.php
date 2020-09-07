<?php

use Illuminate\Database\Seeder;
use App\Movie;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $new_movie = new Movie();
            $new_movie->titolo = $faker->word;
            $new_movie->trama = $faker->text(1000);
            $new_movie->voto = $faker->numberBetween(1, 10);
            $new_movie->lingua = $faker->randomElement([
                'italiano',
                'inglese',
                'tedesco'
            ]);

            $new_movie->save();
        }
    }
}
