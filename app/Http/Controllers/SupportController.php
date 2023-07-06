<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function feedback()
    {
        return view('pages.support.feedback');
    }

    public function download()
    {
        return view('pages.support.download');
    }
    
    public function usermanual()
    {
        return view('pages.support.user-manual');
    }
}
