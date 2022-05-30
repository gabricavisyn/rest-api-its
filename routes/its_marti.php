<?php


use Illuminate\Support\Facades\Route;

Route::get('/salve', function(Request $request){
    return response("<h1>Ciao da Nick</h1>");
});
