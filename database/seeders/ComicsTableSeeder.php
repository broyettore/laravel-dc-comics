<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comicList = config("comics");

        foreach($comicList as $comic) {

            $newComic = new Comic();

            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            foreach($comic["artists"] as $artist) {
                $newComic->artists = $artist;
            }
            foreach($comic["writers"] as $writer) {
                $newComic->writers = $writer;
            }
            $newComic->save();
        }
        
    }
}
