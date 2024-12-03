<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\TrendGamesController;
use App\Models\Mostplayed;
use App\Models\topplayed;
use App\Models\trendgames;
use App\Models\contactinfo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $gamesdatas = trendgames::all();
        $Mostplayed = Mostplayed::all();
        $topplayed = topplayed::all();
        return view('front.pages.home', compact('gamesdatas' , 'Mostplayed', 'topplayed'));

    }
    public function Productsdetails(){
        $topplayed = topplayed::all();
        return view('front.pages.products-details', compact('topplayed'));
    }
    public function Ourshops(){

        $gamesdatas = trendgames::all();
        return view('front.pages.our-shop', compact('gamesdatas'));
    }
    public function Contactus(){
        $contactinfo=contactinfo::first();
        return view('front.pages.contact-us', compact('contactinfo'));
    }
    public function userprofile(){
        return view('front.pages.user-profile');
    }

    public function sendingmail(){
        return view('front.pages.sendingemail');
    }
}

