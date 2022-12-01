<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.brand.index', ['product_brands'=> Brand::all()]);
    }
}
