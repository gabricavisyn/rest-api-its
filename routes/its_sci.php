<?php


use Illuminate\Support\Facades\Route;

Route::get('/salve', function(Request $request){
    return response("<h1>Evviva la richiesta funziona!</h1>");
});



Route::get('/redirect', function(Request $request){
    return response()->redirectTo('https://it.wikipedia.org/');
});
