<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;

class Delete extends Component
{
    public $supplier_id;

    public function deleteSupplier($supplier_id)
    {
        $this->supplier_id = $supplier_id;
    }

    public function destroySupplier()
    {
        $supplier = Supplier::find($this->supplier_id);

        $supplier->delete();
        session()->flash('message', 'Supplier Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.supplier.delete');
    }
}
