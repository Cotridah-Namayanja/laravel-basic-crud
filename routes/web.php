<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\Tasks\NewTaskComponent;
use App\Livewire\Tasks\EditTaskComponent;
use App\Livewire\Tasks\ViewTasksComponent;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');


    Route::get('create-task',NewTaskComponent::class)->name('create-task-link');
    Route::get('view-task',ViewTasksComponent::class)->name('view-task-link');
    Route::get('edit-task/{taskId}', EditTaskComponent::class)->name('edit-task-link');

});

require __DIR__.'/auth.php';
