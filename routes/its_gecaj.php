<?php


use Illuminate\Support\Facades\Route;

Route::get('/gecaj', function(Request $request){
    return response("<h1>Gecaj Adriano</h1>");
});
