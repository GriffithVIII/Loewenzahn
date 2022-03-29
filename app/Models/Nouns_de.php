<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouns_de extends Model
{
    use HasFactory;
    protected $table = 'Nouns_de';
    protected $fillable = ["language_id", "genre_id", "word", "comment"];

    public function genre()
    {
        return $this->hasOne('App\Models\Genres', 'genre_id', 'genre_id');
    }

    public function language()
    {
        return $this->hasOne('App\Models\Languages', 'language_id', 'language_id');
    }
}
