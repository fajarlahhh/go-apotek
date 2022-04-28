<?php

namespace App\Http\Livewire\Frontend;

use App\Http\Livewire\Frontend\Main;

class Home extends Main
{
    public function render()
    {
        return view('livewire.frontend.home')->extends('layouts.frontend', [
            'dataCategory' => $this->dataCategory
        ]);
    }
}
