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
    $data = table_name::take(4)->pluck('temperature');
    echo($data);
    // Adapter les données pour la réponse JSO

    return response()->json($data);
}
public function fetch(){
        // Récupérer les quatre premières valeurs de la table "temperature"
        $data = table_name::take(4)->get();
        echo($data);
        // Adapter les données pour la réponse JSON
        $formattedData = $data->map(function ($entry) {
            return [
                'label' => $entry->label, // Assurez-vous d'adapter cela à votre modèle
                'value' => $entry->value  // Assurez-vous d'adapter cela à votre modèle
            ];
        });
        return view('hhhh', ['data' => $data]); 
}

public function getFirstFourTemperatures()
{
    // Récupérer les quatre premières températures
    $temperatures = table_name::select('temperature')->limit(4)->get()->pluck('temperature');

    return response()->json($temperatures);
}
}
