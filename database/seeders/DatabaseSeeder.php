<?php

namespace Database\Seeders;

use App\Models\Invite;
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
        User::factory(15)->create();
        Post::factory(20)->create();
        Settings::factory(15)->create();
        Like::factory(60)->create();
        #Invite::factory(50)->create(); invite is related with notifications

    }
}
