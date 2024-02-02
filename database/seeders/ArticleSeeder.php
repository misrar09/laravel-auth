<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [

                'title' => 'First Article',
                'description' => 'This is the first articles description',
                'conclustion' => 'This is the conclustion of the first article'
            ],
            [
                'title' => 'Second Article',
                'description' => 'This is the second articles description',
                'conclustion' => 'This is the conclustion of the second article'
            ],
            [
                'title' => 'Third Article',
                'description' => 'This is the third articles description',
                'conclustion' => 'This is the conclustion of the third article'
            ],

        ];

        foreach ($articles as $article) {
            $newArticle = new Article();
            $newArticle->fill($article);
            $newArticle->save();
        }
    }
}
