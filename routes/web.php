<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function(){
      echo '<script>document.location = \'/trainer\'</script>';
});
Route::get('/trainer', [TrainerController::class, 'viewTrainerList']);
Route::get('/trainer/{name}', [TrainerController::class, 'viewTrainerListSearch']);
Route::get('/create', [TrainerController::class, 'viewTrainerCreate']);
Route::get('/profile/{id}', [ProfileController::class, 'viewProfile']);
Route::get('/profile/pokedex/{id}', [ProfileController::class, 'viewReadAllSeen']);
Route::get('/profile/caught/{id}', [ProfileController::class, 'viewReadAllCaught']);
Route::get('/profile/create/{id}', [ProfileController::class, 'viewCreate']);
Route::get('/profile/edit/{id}', [ProfileController::class, 'viewEdit']);
Route::get('/profile/delete/{id}', [ProfileController::class, 'viewDelete']);

Route::post('/act/trainer/create', [TrainerController::Class, 'actTrainerCreate']);