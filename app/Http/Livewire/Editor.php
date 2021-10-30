<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Editor extends Component
{
    public array $previewTweets = [];
    public string $editor = '';

    public function render()
    {
        return view('livewire.editor');
    }
}
