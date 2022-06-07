<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;

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
      echo '<script>document.location = \'trainer/profile\'</script>';
});
Route::get('/trainer/profile', [TrainerController::class, 'viewProfile']);
Route::get('/trainer/pokedex', [TrainerController::class, 'viewReadAllSeen']);
Route::get('/trainer/caught', [TrainerController::class, 'viewReadAllCaught']);
Route::get('/trainer/create', [TrainerController::class, 'viewCreate']);
Route::get('/trainer/edit/{id}', [TrainerController::class, 'viewEdit']);
Route::get('/trainer/delete/{id}', [TrainerController::class, 'viewDelete']);