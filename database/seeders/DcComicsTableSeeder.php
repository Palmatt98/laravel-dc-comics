<?php

namespace Database\Seeders;

use App\Models\DcComic;
use Illuminate\Database\Seeder;


class DcComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('dc_comics');
        foreach ($data as $item) {
            $newComics = new DcComic();
            $newComics->title = $item['title'];
            $newComics->description = $item['description'];
            $newComics->thumb = $item['thumb'];
            $newComics->price = $item['price'];
            $newComics->sale_date = $item['sale_date'];
            $newComics->save();

        }
    }
}
