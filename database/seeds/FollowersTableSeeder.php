<?php

use App\Follow;
use Illuminate\Database\Seeder;

/**
 * Class FollowersTableSeeder
 */
class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Follow::class, 30000)->create();
    }
}
