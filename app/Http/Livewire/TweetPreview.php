<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TweetPreview extends Component
{
    public array $previewTweets;

    public string $characterCount;
    public string $tweetCount;

    public function mount(): void
    {
        $this->characterCount = count($this->previewTweets);
        $this->tweetCount = count($this->previewTweets);
    }

    public function render()
    {
        return view('livewire.tweet-preview');
    }
}
