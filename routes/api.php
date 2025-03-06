<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pays', function () {
    return [
        "AF" => "Afghanistan",
        "AL" => "Albanie",
        "RDC" => "RDCongo",
        "VN" => "Vietnam",
        "ZM" => "Zambie",
        "ZW" => "Zimbabwe"
    ];
});

Route::get('/articles', [ArticleController::class, 'index']);
