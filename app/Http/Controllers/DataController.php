<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\table_name;

class DataController extends Controller
{
    public function fetchData()
{
    
    // Récupérer les quatre premières valeurs de la table "temperature"
    $donnees = table_name::orderBy('created_at', 'desc')->pluck('temperature')->take(4)->toArray();
    echo($donnees);
    // Adapter les données pour la réponse JSO

    return response()->json($donnees);
}

public function getFirstFourTemperatures()
{
    // Récupérer les quatre premières températures
    $temperatures = table_name::select('temperature')->limit(4)->get()->pluck('temperature');

    return response()->json($temperatures);
}
}
