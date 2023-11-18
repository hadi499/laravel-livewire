<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
    Route::post('/logout', [LogoutController::class, 'logout']);
});
Route::get('/login', \App\Livewire\Users\Login::class)->name('login')->middleware('guest');
