<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class ViewTasksComponent extends Component
{
    public function render()
    {
        return view('livewire.tasks.view-tasks-component',[
            'tasks' => \App\Models\Task::all(),
        ]);
    }
}
