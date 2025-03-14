<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $name = $request->query('name', 'Kimberly');
    return view('hello', ['name' => $name]);
});
