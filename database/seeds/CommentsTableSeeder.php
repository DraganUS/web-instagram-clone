<?php

use App\Comment;
use Illuminate\Database\Seeder;

/**
 * Class CommentsTableSeeder
 */
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 5000)->create();
    }
}
