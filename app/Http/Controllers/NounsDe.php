<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Languages;
use App\Models\Nouns_de;
use App\Models\Nouns_es;
use App\DataTables\NounsDeDataTable;
use App\DataTables\NounsDeDataTablesEditor;

class NounsDe extends Controller
{
    public function index(NounsDeDataTable $dataTable)
    {
        $nouns_de = Nouns_de::all();
        $nouns_es = Nouns_es::all();
        $genres = Genres::all();
        $languages = Languages::all();

        //$test = Nouns_de::find(1)->language;        
        return $dataTable->render('admin.de.nouns.main', compact(['nouns_de', 'nouns_es', 'genres', 'languages']));
    }

    public function editor(NounsDeDataTablesEditor $editor)
    {
        return $editor->process(request());
    }

    public function create()
    {
        $genres = Genres::where('language_id', '!=', 2)->pluck('word', 'genre_id');
        $languages = Languages::where('language_id', '!=', 2)->pluck('long_name', 'language_id');
        
        $genres_es = Genres::where('language_id', '!=', 1)->pluck('word', 'genre_id');
        $languages_es = Languages::where('language_id', '!=', 1)->pluck('long_name', 'language_id');

        return view('admin.de.nouns.create', compact(['genres', 'languages',
        'genres_es', 'languages_es']));
    }

    public function translate(Nouns_de $nouns_de)
    {
        $genres = Genres::where('language_id', '!=', 1)->pluck('word', 'genre_id');
        $languages = Languages::where('language_id', '!=', 1)->pluck('long_name', 'language_id');
        return view('admin.de.nouns.translate', compact(['nouns_de', 'genres', 'languages']));
    }

    public function edit(Nouns_de $nouns_de)
    {
        $genres = Genres::where('language_id', '!=', 2)->pluck('word', 'genre_id');
        $languages = Languages::where('language_id', '!=', 2)->pluck('long_name', 'language_id');
        return view('admin.de.nouns.edit', compact(['nouns_de', 'genres', 'languages']));
    }

    public function update(Nouns_de $nouns_de)
    {			
		$input = request()->all();
		$nouns_de->update($input);
		return redirect('/de/nouns')->with('success', 'Noun has been updated.');
    }

    public function store(Request $request)
    {
        $input = request()->all();
        $input_es = [];
        $keys = array_keys($input);
        foreach($keys as $key) {
            if(str_contains($key, '_es')){
                $name = trim($key, "_es");
                $input_es[$name] = $input[$key];
                unset($input[$key]);
            }
        }
        $copy = Nouns_de::create($input)->toArray();
        if($input_es["word"] != ""){
            $input_es['id'] = $copy['id'];
            Nouns_es::create($input_es);
        }

        return redirect('/de/nouns')->with('success', 'Noun succesfully added!');
    }
    
    public function storeTranslated(Request $request)
    {
        Nouns_es::create($request->all());
        return redirect('/de/nouns')->with('success', 'Noun succesfully added!');
    }

}