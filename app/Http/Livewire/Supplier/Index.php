<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;

class Index extends Component
{
    public function render()
    {
        return view('livewire.supplier.index', ['suppliers'=> Supplier::all()]);
    }
}
