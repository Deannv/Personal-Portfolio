<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $shortcuts = [
        'Home',
        'Experience',
        'Projects',
        'Certifications',
        'Contact',
    ];

    public $selectedShortcut = 'Home';

    private $commandPrefixText = './';

    public $commandText = '';

    public function selectShortcut($shortcut)
    {
        $this->selectedShortcut = $shortcut;
        $this->commandText = $this->commandPrefixText . $this->selectedShortcut . '.sh';
    }

    public function render()
    {
        return view('livewire.main');
    }
}
