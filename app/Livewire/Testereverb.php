<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Testereverb extends Component
{
    public int $count = 10;
    
    public function render()
    {
        return view('livewire.testereverb');
    }

    #[On('echo:channel-teste,test')]
    public function add()
    {
        $this->count++;
    }
}
