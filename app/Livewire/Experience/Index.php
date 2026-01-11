<?php

namespace App\Livewire\Experience;

use App\Models\Company;
use Livewire\Component;

class Index extends Component
{
    public $companies;

    public function mount()
    {
        $this->companies = Company::with([
            'experiences' => function ($query) {
                $query
                    ->orderByDesc('is_currently_working')
                    ->orderByDesc('end_date');
            },
            'experiences.skills',
            'experiences.experienceBulletPoints',
        ])->get();
    }

    public function render()
    {
        return view('livewire.experience.index');
    }
}
