<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'First Blog Post',
            'content' => 'This is the content of the first blog post.',
        ]);

        Post::create([
            'title' => 'Learning Laravel',
            'content' => 'Laravel is a powerful PHP framework for building web applications.',
        ]);

        Post::create([
            'title' => 'Learning Database',
            'content' => 'Databases are essential for storing and managing data in applications.',
        ]);

        Post::create([
            'title' => 'Understanding Eloquent',
            'content' => 'Eloquent is Laravel\'s ORM that makes database interactions easy and intuitive.',
        ]);
    }
}
