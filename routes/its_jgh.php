<?php
    $nome = 'Soufian';
    use Illuminate\Support\Facades\Route;

    Route::get('/Saluta', function(Request $request){
        return response("<h1>Ciao ".$nome."!</h1>");
    });

    Route::get('/redirect', function(Request $request){
        return redirect('https://google.com');
    });