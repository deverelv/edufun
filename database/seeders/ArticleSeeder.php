<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Machine Learning',
                'preview' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Machine Learning.jpg',
                'category_id' => 1,
                'writer_id' => 1,
            ],
            [
                'title' => 'Deep Learning',
                'preview' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Deep Learning.jpg',
                'category_id' => 1,
                'writer_id' => 1,
            ],
            [
                'title' => 'Natural Language Processing',
                'preview' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Natural Language Processing.jpg',
                'category_id' => 1,
                'writer_id' => 1,
            ],
            [
                'title' => 'Software Security',
                'preview' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Network Administration.jpg',
                'category_id' => 2,
                'writer_id' => 2,
            ],
            [
                'title' => 'Network Administration',
                'preview' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Software Security.jpg',
                'category_id' => 2,
                'writer_id' => 2,
            ],
            [
                'title' => 'Popular Network Technology',
                'preview' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image_path' => 'img/Popular Network Technology.jpg',
                'category_id' => 2,
                'writer_id' => 2,
            ]
        ];

        foreach ($articles as $article) {
            Article::create([
                'title' => $article['title'],
                'preview' => $article['preview'],
                'content' => $article['content'],
                'image_path' => $article['image_path'],
                'category_id' => $article['category_id'],
                'writer_id' => $article['writer_id'],
                'post_date' => now(),
            ]);
                
        }
    }
}
