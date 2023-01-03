<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class Edit extends Component
{
    public $categoryId;
    public $category_name, $category_status;

    public function mount()
    {
        $this->category_name = $this->category->category_name;
    }

    public function updateCategory()
    {
        $this->validate([
            'category_name'      =>      ['required', 'string', 'max:255'],
            'category_status'    =>      ['required', 'numeric'],
        ]);

        $this->category->update([
            'category_name'      =>      $this->category_name,
            'category_status'    =>      $this->category_status == true ? '0': '1',
        ]);

        return redirect()->to('category');
    }

    public function getCategoryProperty()
    {
        return Category::find($this->categoryId);
    }

    public function render()
    {
        return view('livewire.category.edit');
    }
}
