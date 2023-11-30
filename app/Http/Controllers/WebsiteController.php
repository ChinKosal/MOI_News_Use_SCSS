<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Index()
    {
        return view('website.page1');
    }

    public function latest_news(){
        return view('website.latest_news');
    }
}