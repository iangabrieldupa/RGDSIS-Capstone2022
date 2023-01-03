<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Delete extends Component
{
    public $product_id;

    public function deleteProduct($product_id)
    {
        $this->product_id = $product_id;
    }

    public function destroyProduct()
    {
        $product = Product::find($this->product_id);

        $product->delete();
        session()->flash('message', 'Product Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.product.delete');
    }
}
