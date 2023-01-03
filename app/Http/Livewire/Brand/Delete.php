<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class Delete extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    public function render()
    {
        return view('livewire.brand.delete');
    }
}
