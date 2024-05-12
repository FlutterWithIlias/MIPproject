<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\table_name;
class Tables extends Component
{
    public function render()
    {   
        $data = table_name::select('temperature', 'humidite', 'created_at')->get();

        return view('livewire.tables')->with('data',$data);
    }
}
