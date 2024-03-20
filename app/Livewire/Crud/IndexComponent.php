<?php

namespace App\Livewire\Crud;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('livewire.layouts.base')]

class IndexComponent extends Component
{
    public function render()
    {
        return view('livewire.crud.index-component');
    }
}
