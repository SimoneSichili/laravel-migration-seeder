<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 23; $i++) { 
            $article = new Article();
            $article->title = $faker->sentence(3);
            $article->subtitle = $faker->sentence(6);
            $article->author = $faker->name();
            $article->text = $faker->text(1000);
            $article->publication_date = $faker->dateTime();
            $article->save();
        }

    }
}

