<?php

namespace App\Livewire\About;

use App\Models\Content;
use App\Models\Education;
use App\Models\Skill;
use Livewire\Component;

class Index extends Component
{
    public $content;

    public $education;

    public $topSkills;

    public function mount()
    {
        $this->content = Content::first();
        $this->education = Education::orderByDesc('start_date')->get();
        $this->topSkills = Skill::where('is_top', true)->get();
    }

    public function render()
    {
        return view('livewire.about.index');
    }
}
