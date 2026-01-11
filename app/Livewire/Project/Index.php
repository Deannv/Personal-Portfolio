<?php

namespace App\Livewire\Project;

use App\Models\Content;
use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public $projects;
    public $githubUrl;

    public function mount()
    {
        $this->projects = Project::with('skills')->get();
        $this->githubUrl = Content::select('github_url')->get()->first();
    }

    public function render()
    {
        return view('livewire.project.index');
    }
}
