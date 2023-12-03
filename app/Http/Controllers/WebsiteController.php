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
    public function page5()
    {
        return view('website.Security&Society');
    }
    public function page6()
    {
        return view('website.training');
    }
    public function page7()
    {
        return view('website.Kingdom&community');
    }
    public function page8()
    {
        return view('website.Fight&drugs');
    }
    public function page9()
    {
        return view('website.Order&traffic');
    }
    public function page10()
    {
        return view('website.Vetika&police');
    }

    public function page11()
    {
        return view('website.magazin');
    }

    public function page12()
    {
        return view('website.video');
    }
    public function dialog()
    {
        return view('welcome');
    }
}
