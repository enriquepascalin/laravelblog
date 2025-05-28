<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $post = Post::create([
            'title' => 'First Post',
            'content' => 'This is the content of the first post',
            'user_id' => $user->id,
        ]);

        Comment::create([
            'content' => 'Great post!',
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);
    }
}
