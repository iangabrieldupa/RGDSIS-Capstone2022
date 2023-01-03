<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public $category_id;

    public function deleteCategory($category_id)
    {
        $this->category_id = $category_id;
    }

    public function destroyCategory()
    {
        $category = Category::find($this->category_id);

        $category->delete();
        session()->flash('message', 'Category Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.category.index', ['product_categories'=> Category::all()]);
    }
}
