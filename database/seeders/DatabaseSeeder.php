<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'REYDAN',
            'email' => 'Reydan@gmail.com',
            'password' => bcrypt('123456'),

        ]);

        // Post::factory(4)->create();
    }
}
