<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SubForm;
use App\Http\Controllers\controlerInv;
use App\Http\Controllers\viewcontroller;
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

//  Route::get('/', function () {
//      return view('welcome');
// });

Route::get('index/{prenom?}/{nom?}/{sexe?}/{email?}/',[SubForm::class,'index'])->name('index');
Route::post('/afficher',[SubForm::class,'afficher']);
// Route::get('/{page}', controlerInv::class);
Route::get('/formre',[viewcontroller::class,'viewcontroller']);
