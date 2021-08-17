<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaIndex extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea, $votesCount)
    {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->hasVoted = $idea->voted_by_user;
    }

    public function vote()
    {
        if (auth()->guest()) {
            return redirect(route('login'));
        }

        $this->idea->toggleVote(auth()->user());

        if ($this->hasVoted) {
            $this->hasVoted = false;
            $this->votesCount--;
        } else {
            $this->hasVoted = true;
            $this->votesCount++;
        }
    }

    public function render()
    {
        return view('livewire.idea-index');
    }
}
