<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title  = config('project_data.menus_and_titles.titles.main');
    $menu   = config('project_data.menus_and_titles.menus.standard');
    return view('pages.main', compact('title', 'menu'));
})->name('main');
