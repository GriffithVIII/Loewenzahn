<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Languages;
use App\Models\Nouns_de;
use App\Models\Nouns_es;
use App\DataTables\Nouns_deDataTable;

class NounsDe extends Controller
{
    public function index(Nouns_deDataTable $dataTable)
    {
        $nouns_de = Nouns_de::all();
        $nouns_es = Nouns_es::all();
        $genres = Genres::all();
        $languages = Languages::all();

        $test = Nouns_de::find(1)->language;
        //dd($test);
        


        return $dataTable->render('admin.tables', compact(['nouns_de', 'nouns_es', 'genres', 'languages']));
        //return view('sprachtor.artikeltraining', compact(['nouns_de', 'nouns_es', 'genres']));
    }
}