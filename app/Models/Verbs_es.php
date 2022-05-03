<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verbs_es extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'verbs_es';
    protected $fillable = ["id", "grundform", "language_id", "perfect", "conditional", "imperfect_preterite", "regular",
    "1p_s", "2p_s", "3p_s", "1p_p", "2p_p", "3p_p", "formel_s", "formel_p",
    "2p_s_imperative", "1p_p_imperative", "2p_p_imperative", "formel_s_imperative", "formel_p_imperative",
    "preterite_1p_s", "preterite_2p_s", "preterite_3p_s", "preterite_1p_p", "preterite_2p_p", "preterite_3p_p",
    "preterite_formel_s", "preterite_formel_p", "comment"];

}
