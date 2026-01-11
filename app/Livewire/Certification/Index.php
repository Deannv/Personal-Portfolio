<?php

namespace App\Livewire\Certification;

use App\Models\Certification;
use Livewire\Component;

class Index extends Component
{
    public $certifications;

    public function mount()
    {
        $this->certifications = Certification::orderByDesc('issued_on')->get();
    }

    public function render()
    {
        return view('livewire.certification.index');
    }
}
