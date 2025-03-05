<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SiteSetting;

abstract class Controller
{
    //constructor
    public function __construct()
    {
        $arr['pages'] = Page::all();
        $arr['siteSettings'] = SiteSetting::first();
        view()->share($arr);
    }
}
