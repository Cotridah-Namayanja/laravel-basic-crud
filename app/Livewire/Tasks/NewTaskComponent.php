<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class NewTaskComponent extends Component
{
    public $name;
    public $date;
    public function render()
    {
        return view('livewire.tasks.new-task-component');
    }

    public function createTask()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        \App\Models\Task::create([
            'name' => $this->name,
            'date' => $this->date,
        ]);

        // Reset the form fields
        $this->name = '';
        $this->date = '';

        flash()->addSuccess('Task created successfully.');
    }
}
