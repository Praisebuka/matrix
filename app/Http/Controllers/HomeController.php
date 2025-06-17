<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getUrlEndSideParam() 
    {
        $urlendpoint = last(request()->segments());

        return $urlendpoint;
    }

    public function home()
    {
        return view('home.index')->with(['url' => $this->getUrlEndSideParam()]);;
    }

    public function aboutUs()
    {
        return view('home.about')->with(['url' => $this->getUrlEndSideParam()]);;
    }

    public function contactUs()
    {

        return view('home.contactus')->with(['url' => $this->getUrlEndSideParam()]);
    }
    
}
