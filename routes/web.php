<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

Route::get('/', function () {
    return view('test');
});

Route::get('home',[Frontpages::class, 'home'])->name('home');
Route::get('about',[Frontpages::class, 'about'])->name('about');
Route::get('shop', [Frontpages::class, 'shop'])->name('shop');
Route::get('blog', [Frontpages::class, 'blog'])->name('blog');