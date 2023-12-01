<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Index()
    {
        return view('website.page1');
    }

    public function page2()
    {
        return view('website.latest_news');
    }

    public function page3()
    {
        return view('website.news_everyday');
    }

    public function page4()
    {
        return view('website.action_news');
    }
}
