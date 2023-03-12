<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

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


Route::get('/' , function(){
    return view('Home');
});

Route::get('form' , function(){
   return view('index');
});

Route::get('display' , [FeedbackController::class , 'index'])->name('display');
 Route::post('create' , [FeedbackController::class , 'create'])->name('view.create'); 
Route::get('createp' , [FeedbackController::class , 'createpage']);
Route::get('creat/delete/{id}' , [FeedbackController::class , 'delete'])->name('delete');
Route::get('creat/deleteall' , [FeedbackController::class , 'deleteall'])->name('deleteall');
