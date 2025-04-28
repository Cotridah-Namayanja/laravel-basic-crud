{{-- filepath: c:\xampp\htdocs\laravel-basic-crud\resources\views\livewire\tasks\view-tasks-component.blade.php --}}
<div>
    <h1 class="text-lg font-bold mb-4">Task List</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">#</th>
                <th class="px-4 py-2 border-b">Task Name</th>
                <th class="px-4 py-2 border-b">Task Date</th>
                <th class="px-4 py-2 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $index => $task)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border-b">{{ $task->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $task->date }}</td>
                    <td class="px-4 py-2 border-b">
                        {{-- <button wire:click="editTask({{ $task->id }})" class="text-blue-500 hover:underline">Edit</button> --}}
                        {{-- @livewire(' tasks.edit-task-component', ['taskId' => $task->id], key($task->id)) --}}
                        <a href="{{ route('edit-task-link', ['taskId' => $task->id]) }}" class="text-blue-500 hover:underline">Edit</a>
                        <button wire:click="deleteTask({{ $task->id }})" class="text-red-500 hover:underline ml-2">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 text-center">No tasks found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
