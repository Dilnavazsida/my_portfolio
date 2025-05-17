<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\portfolioController;

// return view('home');
// return view('home')

Route::get('/', function(){
    return view('home');
});


Route::get('/home',[portfolioController::class,'hm']);
Route::get('/about',[portfolioController::class,'ab']);
Route::get('/contact',[portfolioController::class,'con']);
Route::get('/work',[portfolioController::class,'wk']);
Route::get('/skill',[portfolioController::class,'skl']);

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::get('/work',function(){
//     return view('work');
// });

// Route::get('/skill',function(){
//     return view('skills');
// });





