<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactPage()
    {
        return view('Site.Pages.contact');
    }

    public function aboutPage()
    {
        return view('Site.Pages.about');
    }
}
