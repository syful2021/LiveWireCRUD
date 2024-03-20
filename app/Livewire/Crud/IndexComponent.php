<?php

namespace App\Livewire\Crud;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        return view('livewire.crud.index-component')->layout('livewire.layouts.base');
    }
}
