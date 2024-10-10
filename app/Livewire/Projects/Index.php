<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use Livewire\Attributesz\Computed;
use App\Models\Project;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    $[Computed()]

    public function projects(){
        return Project::query()->inRandomOrder()->get();
    }
}
