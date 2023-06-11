<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Card_Controller extends Controller
{
    public  function get_method()
    {
        $title      = config('project_data.menus_and_titles.titles.data');
        $menu       = config('project_data.menus_and_titles.menus.standard');
        return view('pages.comics_data', compact('title', 'menu'));
    }
}