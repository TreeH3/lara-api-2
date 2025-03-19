<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ArticleCategorieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        /*$this->call([
            ArticleSeeder::class,
        ]);*/

        /*$this->call([
            CommentaireSeeder::class,
        ]);*/

        /*$this->call([
            CategorieSeeder::class,
        ]);*/

        /*$this->call([
            ArticleCategorieSeeder::class,
        ]);*/

        $article = Article::find(1);
        $article->categories()->sync(10);
    }
}
