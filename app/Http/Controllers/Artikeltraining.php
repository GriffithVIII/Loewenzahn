<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Languages;
use App\Models\Nouns_de;
use App\Models\Nouns_es;

class Artikeltraining extends Controller
{
    public function index()
    {
        $nouns_de = Nouns_de::all();
        $nouns_es = Nouns_es::all();
        $genres = Genres::all();

        return view('sprachtor.artikeltraining', compact(['nouns_de', 'nouns_es', 'genres']));
    }
}
