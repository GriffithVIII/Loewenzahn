<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $primaryKey = "genres_id";

    public function Nouns_de()
    {
        return $this->belongsTo('App\Models\Nouns_de');
    }

    public function Nouns_es()
    {
        return $this->belongsTo('App\Models\Nouns_es');
    }
}