<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=['comico','triste','felicità'];
        foreach ($tags as $tag_name) {
            $tag= new Tag;
            $tag->name=$tag_name;
            $tag->save();
        }
    }
}
