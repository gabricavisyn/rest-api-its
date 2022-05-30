<?php

use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/salve', function (Request $request){
    return response("<h1>Titolo bellissimo</h1>");
});

?>