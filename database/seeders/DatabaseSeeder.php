<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++)
        {
            $user = User::factory()->create();
            for($j = 0; $j < 3; $j++)
            {
                $post = Post::factory()->for($user)->create();
                Comment::factory()->count(10)->for($post)->create();
            }
        }
    }
}
