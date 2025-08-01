<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::insert(
            [
                [
                    'name'=>'tech',
                    'description'=>'this is tech'
                ],
                [
                    'name'=>'science',
                    'description'=>'this is science'
                ],
                [
                    'name'=>'education',
                    'description'=>'this is education'
                ],
                [
                    'name'=>'travel',
                    'description'=>'this is travel'
                ],
                [
                    'name'=>'sports',
                    'description'=>'this is sports'
                ],
                [
                    'name'=>'entertainment',
                    'description'=>'this is entertainment'
                ]
            ]
        );
    }
}
