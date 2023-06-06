<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use App\Models\User;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ;


Route::get('/', function () {
    return view('login');
});

Route::view('/login', "login")->name('login');
// Route::view('/register', "register")->name('register');
// Route::view('/private', "private")->middleware('auth')->name('private');

Route::post('/validate-register', [LoginController::class, 'register'])->name('validate-register');
Route::post('/init-session', [LoginController::class, 'login'])->name('init-session');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/projects/{project}/tasks', function () {
    $project = Project::find();
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

Route::view('/home', "home")->middleware('auth')->name('home');

Route::get('/user', [UserController::class, 'index'])->middleware('auth')->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->middleware('auth')->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->middleware('auth')->name('user.store');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->middleware('auth')->name('user.edit');
Route::put('user/update/{user}', [UserController::class, 'update'])->middleware('auth')->name('user.update');
// Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');
Route::delete('user/destroy/{user}', [UserController::class, 'destroy'])->middleware('auth')->name('user.destroy');


Route::get('/project', [ProjectController::class, 'index'])->middleware('auth')->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->middleware('auth')->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->middleware('auth')->name('project.store');
Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->middleware('auth')->name('project.edit');
Route::put('project/update/{project}', [ProjectController::class, 'update'])->middleware('auth')->name('project.update');
Route::get('/project/show/{project}', [ProjectController::class, 'show'])->middleware('auth')->name('project.show');
Route::delete('project/destroy/{project}', [ProjectController::class, 'destroy'])->middleware('auth')->name('project.destroy');

Route::get('/task', [TaskController::class, 'index'])->middleware('auth')->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->middleware('auth')->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->middleware('auth')->name('task.store');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->middleware('auth')->name('task.edit');
Route::put('task/update/{task}', [TaskController::class, 'update'])->middleware('auth')->name('task.update');
// Route::get('/task/show/{task}', [TaskController::class, 'show'])->name('task.show');
Route::delete('task/destroy/{task}', [TaskController::class, 'destroy'])->middleware('auth')->name('task.destroy');
