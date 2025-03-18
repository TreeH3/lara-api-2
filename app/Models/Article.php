<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categorie::class);
    }
}
