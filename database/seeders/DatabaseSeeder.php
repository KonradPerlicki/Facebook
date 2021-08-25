<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        Settings::factory(10)->create();
        Like::factory(60)->create();
    }
}
