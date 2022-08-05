<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Calendar;
use App\Models\Event;

// debería ser innecesario
//use App\Http\Controllers\Admin\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

/**
 * queremos que as rutas se sometan a autentificación do usuario
 * para o empregamos middleware(['auth'])
 * para non crear codigo spaguetti agruparemos todas as rutas
 * afectadas por ese mesmo middleware
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    /**
     * calendario
     */
Livewire::component('calendar', Calendar::class);

});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
