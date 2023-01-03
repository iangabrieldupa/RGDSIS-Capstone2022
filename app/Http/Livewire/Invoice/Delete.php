<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use Livewire\Component;

class Delete extends Component
{
    public $invoice_id;

    public function deleteInvoice($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    public function destroyInvoice()
    {
        $invoice = Invoice::find($this->invoice_id);

        $invoice->delete();
        session()->flash('message', 'Invoice Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.invoice.delete');
    }
}
