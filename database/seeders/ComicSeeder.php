<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $NewComic = new Comic();
            $NewComic->title = $comic['title'];
            $NewComic->description = $comic['description'];
            $NewComic->thumb = $comic['thumb'];
            $NewComic->price = $comic['price'];
            $NewComic->series = $comic['series'];
            $NewComic->sale_date = $comic['sale_date'];
            $NewComic->type = $comic['type'];
            $NewComic->save();
        }
    }
}
