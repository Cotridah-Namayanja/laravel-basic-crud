<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class EditTaskComponent extends Component
{
    public $task;
    public $name;
    public $date;


    public function mount($taskId)
    {
        $this->task = \App\Models\Task::find($taskId);
        $this->name = $this->task->name;
        $this->date = $this->task->date;
    }
    public function render()
    {
        return view('livewire.tasks.edit-task-component');
    }
    public function UpdateTask()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $this->task->update([
            'name' => $this->name,
            'date' => $this->date,
        ]);

        flash()->addSuccess('Task updated successfully.');
    }
}
