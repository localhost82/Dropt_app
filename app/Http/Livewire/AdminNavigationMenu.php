<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminNavigationMenu extends Component
{
    protected $listeners = [
        'refresh-navigation-menu' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.admin-navigation-menu');
    }
}
