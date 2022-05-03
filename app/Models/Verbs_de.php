<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verbs_de extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'verbs_de';
    protected $fillable = ["id", "grundform", "language_id", "hilfsverb", "preterite", "perfect", "konjunktiv_ii",
    "regular", "1p_s", "2p_s", "3p_s", "1p_p", "2p_p", "3p_p", "formel",
    "2p_s_imperative", "1p_p_imperative", "2p_p_imperative", "formel_imperative", "comment"];

    public function language()
    {
        return $this->hasOne('App\Models\Languages', 'language_id', 'language_id');
    }
}
