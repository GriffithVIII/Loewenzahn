<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $primaryKey = "genre_id";

    public function nouns_de()
    {
        return $this->belongsTo('App\Models\Nouns_de', 'genre_id');
    }

    public function nouns_es()
    {
        return $this->belongsTo('App\Models\Nouns_es', 'genre_id');
    }
}
