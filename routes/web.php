<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/link', function(Request $request) {
    $request->validate(['url' => 'required|url']);
});
