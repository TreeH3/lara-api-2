<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use Illuminate\Http\JsonResponse;


class ArticleController extends Controller
{
     /**
     * Récupère et retourne tous les articles en format JSON.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $articles = Article::all();

        return response()->json($articles);
    }
}
