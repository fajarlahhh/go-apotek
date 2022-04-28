<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Category;

class Main extends Component
{
    public $dataCategory, $category;

    public function mount()
    {
        $this->dataCategory = Category::all();
    }
}
