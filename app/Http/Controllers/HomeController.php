<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Promo;
use App\Models\Special;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->get();
        $about = About::first();
        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
        $contact = Contact::first();
        $promosi = Promo::orderBy('created_at', 'asc')->get();
        $specials = Special::orderBy('created_at', 'asc')->get();
        $menus = Menu::orderBy('created_at', 'asc')->get();


        return view('home.index', compact(
            'sliders',
            'about',
            'portfolios',
            'promosi',
            'contact',
            'specials',
            'menus',
        ));
    }

}
