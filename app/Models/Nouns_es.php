<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nouns_es extends Model
{
    use HasFactory;
    protected $table = 'Nouns_es';
    public function Genre()
    {
        return $this->belongsTo('App\Models\Genres');
    }

    public function Language()
    {
        return $this->belongsTo('App\Models\Languages');
    }
}
