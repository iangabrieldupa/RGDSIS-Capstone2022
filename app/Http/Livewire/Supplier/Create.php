<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;

class Create extends Component
{
    public $supplier_name, $supplier_address, $supplier_contact_no;

    public function addSupplier()
    {
        $this->validate([
            'supplier_name'            =>      ['required', 'string', 'max:255'],
            'supplier_address'         =>      ['required', 'string', 'max:255'],
            'supplier_contact_no'      =>      ['required', 'string', 'max:255'],
        ]);

        Supplier::create([
            'supplier_name'            =>      $this->supplier_name,
            'supplier_address'         =>      $this->supplier_address,
            'supplier_contact_no'      =>      $this->supplier_contact_no,
        ]);

        return redirect()->to('supplier');
    }

    public function render()
    {
        return view('livewire.supplier.create');
    }
}
