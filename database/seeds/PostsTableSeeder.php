<?php

use Illuminate\Database\Seeder;
use App\Post;
/**
 * Class PostsTableSeeder
 */
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 5000)->create();
    }
}
