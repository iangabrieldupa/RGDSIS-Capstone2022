<?php

namespace App\Http\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class Delete extends Component
{
    public $unit_id;

    public function deleteUnit($unit_id)
    {
        $this->unit_id = $unit_id;
    }

    public function destroyUnit()
    {
        $unit = Unit::find($this->unit_id);

        $unit->delete();
        session()->flash('message', 'Unit Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.unit.delete');
    }
}
