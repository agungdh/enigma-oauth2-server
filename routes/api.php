<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    $user = $request->user();
    $user->roles;
    $user->role = $user->roles->first();
    $user->role_name = $user->role->name;

    return $user;
})->middleware('auth:api');
