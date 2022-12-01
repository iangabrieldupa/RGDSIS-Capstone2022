<?php

namespace App\Http\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class Create extends Component
{
    public $unit_name;

    public function addUnit()
    {
        $this->validate([
            'unit_name'      =>      ['required', 'string', 'max:255'],
        ]);

        Unit::create([
            'unit_name'      =>      $this->unit_name,
        ]);

        return redirect()->to('unit');
    }

    public function render()
    {
        return view('livewire.unit.create');
    }
}
