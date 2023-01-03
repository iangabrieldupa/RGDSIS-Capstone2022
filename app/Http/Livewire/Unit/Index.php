<?php

namespace App\Http\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.unit.index', ['units'=> Unit::all()]);
    }
}
