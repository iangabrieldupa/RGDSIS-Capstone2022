<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class Create extends Component
{
    public $category_name, $category_status;

    public function addCategory()
    {
        $this->validate([
            'category_name'      =>      ['required', 'string', 'max:255'],
            'category_status'    =>      ['required', 'numeric'],
        ]);

        Category::create([
            'category_name'      =>      $this->category_name,
            'category_status'    =>      $this->category_status == true ? '0': '1',
        ]);

        return redirect()->to('category');
    }

    public function render()
    {
        return view('livewire.category.create');
    }
}
