<?php


use Illuminate\Support\Facades\Route;

Route::get('/salve', function(Request $request){
    return response("<h1>Evviva la richiesta funziona!</h1>");
});
