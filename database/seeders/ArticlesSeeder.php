<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $articles = [
            ['name' => 'Sample Article 1', 'wordcount' => 800, 'status' => 'published'],
            ['name' => 'Sample Article 2', 'wordcount' => 1200, 'status' => 'draft'],
            ['name' => 'Sample Article 3', 'wordcount' => 1500, 'status' => 'published'],
            ['name' => 'Sample Article 4', 'wordcount' => 2000, 'status' => 'draft'],
            ['name' => 'Sample Article 5', 'wordcount' => 2500, 'status' => 'published'],

        ];

        // Insert data into the "articles" table
        foreach ($articles as $articleData) {
            Article::create($articleData);
        }
    }
}
