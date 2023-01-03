<?php

namespace App\Http\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class Edit extends Component
{
    public $unitId;
    public $unit_name;

    public function mount()
    {
        $this->unit_name = $this->unit->unit_name;
    }

    public function updateUnit()
    {
        $this->validate([
            'unit_name'      =>      ['required', 'string', 'max:255'],
        ]);

        $this->unit->update([
            'unit_name'      =>      $this->unit_name,
        ]);

        return redirect()->to('unit');
    }

    public function getUnitProperty()
    {
        return Unit::find($this->unitId);
    }

    public function render()
    {
        return view('livewire.unit.edit');
    }
}
