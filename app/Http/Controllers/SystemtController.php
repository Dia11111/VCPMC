<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemtController extends Controller
{
    public function installsystem()
    {
        return view('pages.system.install-system');
    }
    
    public function config()
    {
        return view('pages.system.config-setting');
    }
}