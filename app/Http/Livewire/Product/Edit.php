<?php

namespace App\Http\Livewire\Product;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Edit extends Component
{
    public $productId;
    public $product_name, $product_unit_price, $quantity, $product_description, $brand_id, $category_id, $unit_id;
    public $brands;
    public $categories;
    public $units;
    public $product_brand, $product_category, $product_unit;

    public function mount(){
        $this->product_name = $this->product->product_name;
        $this->product_unit_price = $this->product->product_unit_price;
        $this->quantity = $this->product->quantity;
        // $this->product_image = $this->product->product_image;
        $this->product_description = $this->product->product_description;
        $this->brand_id = $this->product->brand_id;
        $this->category_id = $this->product->category_id;
        $this->unit_id = $this->product->unit_id;
        // $this->vat_type = $this->product->vat_type;
        $this->brands = Brand::where('brand_status', 1)->get();
        $this->categories = Category::where('category_status', 1)->get();
        $this->units = Unit::get();
    }

    public function updateProduct()
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

        $this->product->update([
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

    public function getProductProperty()
    {
        return Product::find($this->productId);
    }

    public function render()
    {
        return view('livewire.product.edit');
    }
}
