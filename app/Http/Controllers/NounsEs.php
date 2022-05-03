<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Languages;
use App\Models\Nouns_de;
use App\Models\Nouns_es;
use App\DataTables\NounsDeDataTable;

class NounsEs extends Controller
{
    public function index(NounsDeDataTable $dataTable)
    {
        $nouns_de = Nouns_de::all();
        $nouns_es = Nouns_es::all();
        $genres = Genres::all();
        $languages = Languages::all();

        $test = Nouns_de::find(1)->language;
        
        return $dataTable->render('admin.tables', compact(['nouns_de', 'nouns_es', 'genres', 'languages']));
    }

    public function create()
    {
        $nouns_de = Nouns_de::all();
        $genres = Genres::all()->pluck('word', 'genre_id');
        $languages = Languages::all()->pluck('long_name', 'language_id');
        return view('admin.nouns_de.create', compact(['nouns_de', 'genres', 'languages']));
    }

    public function translate()
    {
        $slug = $_GET['id'];
        $nouns_de = Nouns_de::find($slug);
        $nouns_de->genre_id =  Nouns_de::find($slug)->genre->word;
        
        $genres = Genres::all()->pluck('word', 'genre_id');
        $languages = Languages::all()->pluck('long_name', 'language_id')->where('id', '!=', 1);
        return view('admin.nouns_de.translate', compact(['nouns_de', 'genres', 'languages']));
    }

    public function store(Request $request)
    {
        $nouns_de = Nouns_es::create($request->all());
        return redirect('/tables')->with('success', 'Noun succesfully added!');
    }
    
}