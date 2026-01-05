<?php

namespace App\Livewire\Experience;

use App\Models\Experience;
use Livewire\Component;

class Index extends Component
{
    public $experiences;

    public function mount()
    {
        $this->experiences = Experience::with(['skills', 'experienceBulletPoints'])->get();
    }

    public function render()
    {
        return view('livewire.experience.index');
    }
}
