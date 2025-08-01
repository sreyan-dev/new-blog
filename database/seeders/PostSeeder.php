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
        Post::insert([
            [
                'title'=>'trial',
                'content'=>'its just a post',
                'category_id'=>'1',
                'slug'=>'trial',
                'author_id'=>'1',
            ]
        ]);
    }
}
