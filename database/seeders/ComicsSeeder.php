<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics= config('comics');
        foreach ($comics as $item) {
            $newComic= new Comics();
            $newComic->title=$item["title"];
            $newComic->description=$item["description"];
            $newComic->thumb=$item["thumb"];
            $newComic->price=$item["price"];
            $newComic->series=$item["series"];
            $newComic->sale_date=$item["sale_date"];
            $newComic->type=$item["type"];

            $newComic->save();
        }
    }
}
