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

use App\Http\Controllers\Card_Controller as Card_Controller;

Route::get('/', function () 
{
    $title  = config('project_data.menus_and_titles.titles.main');
    $menu   = config('project_data.menus_and_titles.menus.standard');
    return view('pages.main', compact('title', 'menu'));
})->name('main');

Route::get('/collection', function() 
{
    $title      = config('project_data.menus_and_titles.titles.collection');
    $menu       = config('project_data.menus_and_titles.menus.standard');
    $comics_db  = config('project_data.comics');
    return view('pages.collection', compact('title', 'menu', 'comics_db'));
})->name('collection');

Route::get('/comics_data', [Card_Controller::class, 'get_method'])->name('comics_data');