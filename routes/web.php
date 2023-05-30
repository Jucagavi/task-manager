<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Models\Project;
use App\Models\User                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ;


Route::get('/', function () {
    return view('home');
});

Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');
Route::view('/private', "private")->middleware('auth')->name('private');

Route::post('/validate-register', [LoginController::class, 'register'])->name('validate-register');
Route::post('/init-session', [LoginController::class, 'login'])->name('init-session');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tasksproject', function () {
    $project = Project::find(1);
    // $task = Task::find(1);
    // echo $task->project->name;
    
    foreach ($project->tasks as $task) {
        echo $task->name."<br>";
    }
});

Route::get('/tasksuser', function () {
    $user = User::find(1);
    // $task = Task::find(1);
    // echo $task->project->name;
    
    foreach ($user->tasks as $task) {
        echo $task->name."<br>";
    }
});

Route::get('/muchas', function () {
    $user = User::find(1);
    // $task = Task::find(1);
    // echo $task->project->name;
    
    foreach ($user->tasks as $task) {
        echo $task->name."<br>";
    }
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('project/update/{project}', [ProjectController::class, 'update'])->name('project.update');
// Route::get('/project/show/{note}', [ProjectController::class, 'show'])->name('note.show');
Route::delete('project/destroy/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/update/{task}', [TaskController::class, 'update'])->name('task.update');
// Route::get('/task/show/{task}', [TaskController::class, 'show'])->name('task.show');
Route::delete('task/destroy/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
