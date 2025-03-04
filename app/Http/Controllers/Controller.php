<?php

namespace App\Http\Controllers;

use App\Models\Page;

abstract class Controller
{
    //constructor
    public function __construct()
    {
        $arr['pages'] = Page::all();
        view()->share($arr);
    }
}
