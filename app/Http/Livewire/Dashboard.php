<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\table_name;
class Dashboard extends Component
{
    public function render()
    {
        $data = table_name::pluck('temperature')->min();
        $donnees =table_name::pluck('temperature')->toArray();
       
        return view('livewire.dashboard')->with('data', $data)->with('donnees', json_encode($donnees));
    }
}
