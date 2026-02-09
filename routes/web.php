<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/__test_alert_redirect', function () {
    return redirect('/')->with('success', 'Alert funcionando!');
});
Route::get('/__test-session', function () {
    session()->flash('success', 'Session OK');
    return redirect('/');
});

Route::get('/__test_alert_back', function () {
    return back()->with('success', 'Alert funcionando!');
});
