<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Languages extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'language_id';
    protected $fillable = ["language_id", "long_name", "short_name"];

    public function Nouns_de()
    {
        return $this->belongsTo('App\Models\Nouns_de', 'language_id');
    }

    public function Nouns_es()
    {
        return $this->belongsTo('App\Models\Nouns_es');
    }
}
