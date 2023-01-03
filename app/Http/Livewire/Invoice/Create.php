<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $bill_no, $product_id, $gross_amount, $net_amount, $quantity, $product;

    public function mount(){
        $this->products = Product::get();
    }

    public function proceed(){
        $this->validate([
            'bill_no'              =>      ['required', 'string', 'max:255'],
            'product_id'           =>      ['required', 'numeric'],
            'quantity'             =>      ['required', 'numeric']
        ]);

        $this->product = Product::find($this->product_id);

        $this->gross_amount = $this->product->product_unit_price * $this->quantity;
        $this->net_amount = $this->gross_amount + ($this->gross_amount * .12);

        $this->validate([
            'bill_no'              =>      ['required', 'string', 'max:255'],
            'product_id'           =>      ['required', 'numeric'],
            'gross_amount'         =>      ['required', 'string', 'max:255'],
            // 'service_charge'       =>      ['required', 'string', 'max:255'],
            // 'vat_charge'           =>      ['required', 'string', 'max:255'],
            'net_amount'           =>      ['required', 'string', 'max:255'],
            // 'discount'             =>      ['required', 'string', 'max:255'],
            // 'post_status'          =>      ['required', 'numeric'],
        ]);
    }

    public function addInvoice()
    {

        // $this->validate([
        //     'bill_no'              =>      ['required', 'string', 'max:255'],
        //     'product_id'           =>      ['required', 'numeric'],
        //     'gross_amount'         =>      ['required', 'string', 'max:255'],
        //     // 'service_charge'       =>      ['required', 'string', 'max:255'],
        //     'vat_charge'           =>      ['required', 'string', 'max:255'],
        //     'net_amount'           =>      ['required', 'string', 'max:255'],
        //     // 'discount'             =>      ['required', 'string', 'max:255'],
        //     'post_status'          =>      ['required', 'numeric'],
        // ]);

        Invoice::create([
            'bill_no'              =>      $this->bill_no,
            'product_id'           =>      $this->product_id,
            'gross_amount'         =>      $this->gross_amount,
            // 'vat_charge'           =>      $this->vat_charge,
            'net_amount'           =>      $this->net_amount,
            // 'post_status'          =>      $this->post_status == true ? '0': '1',
        ]);

        $this->product->update([
            'quantity' => $this->product->quantity - $this->quantity
        ]);
        return redirect()->to('invoice');
    }

    public function render()
    {
        return view('livewire.invoice.create');
    }
}
