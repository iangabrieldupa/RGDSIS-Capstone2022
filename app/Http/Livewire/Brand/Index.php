<?php

namespace App\Http\Livewire\Brand;

use Livewire\Component;

class Index extends Component
{

    public $brand_id;

    public function deleteBrand($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function destroyBrand()
    {
        $brand = Brand::find($this->brand_id);

        $brand->delete();
        session()->flash('message', 'Brand Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.brand.index');
    }
}
