<?php

use Illuminate\Support\Facades\Route;

/*
Não iremos usar a parte web e sim usar apenas API no api.php
*/

Route::get('/', function () {
    return view('welcome');
});
