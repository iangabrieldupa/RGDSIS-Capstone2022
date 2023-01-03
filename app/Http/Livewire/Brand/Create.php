<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Create extends Component
{

    public $brand_name, $brand_status;

    public function addBrand()
    {
        $this->validate([
            'brand_name'      =>      ['required', 'string', 'max:255'],
            'brand_status'    =>      ['required', 'numeric'],
        ]);

        Brand::create([
            'brand_name'      =>      $this->brand_name,
            'brand_status'    =>      $this->brand_status == true ? '0': '1',
        ]);

        return redirect()->to('brand');
    }

    public function render()
    {
        return view('livewire.brand.create');
    }
}
