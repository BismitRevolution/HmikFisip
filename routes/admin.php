<?php

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return redirect()->route('admin.articles.index');
    // return view('admin.dashboard');
})->name('home');
