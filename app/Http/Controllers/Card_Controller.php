<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Card_Controller extends Controller
{
    public  function get_method($index)
    {
        $title          = config('project_data.menus_and_titles.titles.data');
        $menu           = config('project_data.menus_and_titles.menus.standard');
        $comics_db      = config('project_data.comics');
        $single_data    = $comics_db[$index];
        return view('pages.comics_data', compact('title', 'menu', 'single_data'));
    }
}