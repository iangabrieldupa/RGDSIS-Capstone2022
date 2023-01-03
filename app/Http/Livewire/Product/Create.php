<?php

namespace App\Http\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Livewire\Component;

class Create extends Component
{
    public $product_id, $product_name, $product_unit_price, $quantity, $product_description, $brand_id, $category_id, $unit_id;
    public $brands;
    public $categories;
    public $units;
    public $product_brand, $product_category, $product_unit;

    public function mount(){
        $this->brands = Brand::where('brand_status', 1)->get();
        $this->categories = Category::where('category_status', 1)->get();
        $this->units = Unit::get();
    }

    public function addProduct()
    {
        $this->validate([
            'product_name'            =>      ['required', 'string', 'max:255'],
            'product_unit_price'      =>      ['required', 'numeric'],
            'quantity'                =>      ['required', 'string', 'max:255'],
            // 'product_image'           =>      ['required', 'string', 'max:255'],
            'product_description'     =>      ['required', 'string', 'max:255'],
            'brand_id'                =>      ['nullable', 'numeric'],
            'category_id'             =>      ['nullable', 'numeric'],
            'unit_id'                 =>      ['nullable', 'numeric'],
            // 'vat_type'                =>      ['required', 'string', 'max:255'],
        ]);

        Product::create([
            'product_id'              =>      $this->product_id,
            'product_name'            =>      $this->product_name,
            'product_unit_price'      =>      $this->product_unit_price,
            'quantity'                =>      $this->quantity,
            // 'product_image'           =>      $this->product_image,
            'product_description'     =>      $this->product_description,
            'brand_id'                =>      $this->brand_id,
            'category_id'             =>      $this->category_id,
            'unit_id'                 =>      $this->unit_id,
            // 'vat_type'                =>      $this->vat_type,
        ]);

        return redirect()->to('product');
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
