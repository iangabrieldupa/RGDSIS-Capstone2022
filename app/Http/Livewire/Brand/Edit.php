<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Edit extends Component
{
    public $brandId;
    public $brand_name, $brand_status;

    public function mount()
    {
        $this->brand_name = $this->brand->brand_name;
    }

    public function updateBrand()
    {
        $this->validate([
            'brand_name'      =>      ['required', 'string', 'max:255'],
            'brand_status'    =>      ['required', 'numeric'],
        ]);

        $this->brand->update([
            'brand_name'      =>      $this->brand_name,
            'brand_status'    =>      $this->brand_status == true ? '0': '1',
        ]);

        return redirect()->to('brand');
    }

    public function getBrandProperty()
    {
        return Brand::find($this->brandId);
    }

    public function render()
    {
        return view('livewire.brand.edit');
    }
}
