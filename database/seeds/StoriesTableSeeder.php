<?php

use App\Story as StoryAlias;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StoryAlias::class, 1000)->create();
    }
}
