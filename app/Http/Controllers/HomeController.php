<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function aboutUs()
    {
        return view('home.about');
    }

    public function contactUs()
    {
        // <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.731914655285!2d-0.012299723695918554!3d51.543434408070716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d65a5966ee5%3A0x566617b4d56aabce!2sThe%20Arcade%2C%20Westfield%20stratford%20city%2C%20London%20E20%201EL%2C%20UK!5e1!3m2!1sen!2sng!4v1750108409749!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        return view('home.contactus');
    }
    
}
