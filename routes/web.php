<?php

use Reddatasrd\Joker\Joker;
use Illuminate\Support\Facades\Route;
//use Reddatasrd\Joker\Controllers\MainController;

Route::get('/bro/{id?}', 'Reddatasrd\Joker\Controllers\MainController@index');

Route::get('/otro', function(){
    return Joker::bromas();
});