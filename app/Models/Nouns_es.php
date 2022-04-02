<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouns_es extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'Nouns_es';
    protected $fillable = ["id", "language_id", "genre_id", "word", "plural", "comment"];

    public function genre()
    {
        return $this->hasOne('App\Models\Genres', 'genre_id', 'genre_id');
    }

    public function language()
    {
        return $this->hasOne('App\Models\Languages', 'language_id', 'language_id');
    }
}
