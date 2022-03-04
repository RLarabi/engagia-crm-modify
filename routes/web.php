<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ContactController
};


Route::get('/', [HomeController::class, 'index'])
->name('home');

Route::post('/req-demo', [ContactController::class, 'demo'])
->name('demo');

Route::get('/registre', function(){
    return view('registre');   
});