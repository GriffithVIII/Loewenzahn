<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Languages;
use App\Models\Verbs_de;
use App\Models\Verbs_es;
use App\DataTables\VerbsDeDataTable;

class VerbsDe extends Controller
{
    public function index(VerbsDeDataTable $dataTable)
    {
        $languages = Languages::all();
        $verbs_de = Verbs_de::all(); 
        return $dataTable->render('admin.de.verbs.main', compact(['verbs_de', 'languages']));
    }

    public function create()
    {
        $hilfsverben = [
            "haben" => "haben",
            "sein" => "sein",
        ];

        $regularity = [
            "1" => "Regular",
            "0" => "Irregular",
        ];
        $languages = Languages::where('language_id', '!=', 2)->pluck('long_name', 'language_id');
        return view('admin.de.verbs.create', compact(['languages', 'hilfsverben', 'regularity']));
    }

    public function store(Request $request)
    {
        Verbs_de::create(request()->all());
        return redirect('/de/verbs')->with('success', 'Verb succesfully added!');
    }

}
