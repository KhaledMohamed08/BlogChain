<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('Site.home');
    }
}
