<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.invoice.index', ['invoices'=> Invoice::all()]);
    }
}
