<div>
    <form wire:submit.prevent="createTask">
        <!-- Task Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Task Name</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Task Date -->
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Task Date</label>
            <input type="date" id="date" wire:model="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Create Task
            </button>
        </div>
    </form>
</div>
