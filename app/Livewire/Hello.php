<?php

namespace App\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $title = 'Bookmarkr App';

    public function __construct() {
        // $this->title = 'Bookmarkr App';
    }

    public function render()
    {
        return view('livewire.hello');
    }
}
