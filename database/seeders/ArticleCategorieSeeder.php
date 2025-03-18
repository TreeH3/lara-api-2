<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        $categories = Categorie::all();

        foreach ($articles as $article) {
            // Associer chaque article à 1 à 3 catégories aléatoires
            $randomCategories = $categories->random(rand(1, 3))->pluck('id')->toArray();

            foreach ($randomCategories as $categorie_id) {
                DB::table('article_categorie')->insert([
                    'article_id' => $article->id,
                    'categorie_id' => $categorie_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
