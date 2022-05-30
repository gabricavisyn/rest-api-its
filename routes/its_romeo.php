<?php

// This function will rickroll you

use Illuminate\Support\Facades\Route;

Route::get('/rickroll', function(Request $request){
    return response("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
});

Route::get('/home1', function(Request $request){
    return response("<h1>Ciao mondo</h1>
    <br>
    <a
      href='/https://www.youtube.com/watch?v=dQw4w9WgXcQ'
      style="color:red font-size: 34pt">
      Click(?)
   </a>");
});
