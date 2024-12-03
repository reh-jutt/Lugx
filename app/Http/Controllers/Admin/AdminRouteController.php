<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\contactinfo;
use App\Models\Mostplayed;
use App\Models\topplayed;
use App\Models\trendgames;
use Illuminate\Http\Request;

class AdminRouteController extends Controller
{
    //
    public function dashboard(){
        $gamesdatas = trendgames::all();
        return view('admin.pages.index', compact('gamesdatas'));
    }
    public function adminform(){
        return view('admin.pages.form');
    }
    public function trendinggames(){
        return view('admin.pages.trending-game');
    }
    public function gamestable(){
        $gamesdatas= trendgames::all();
        return view('admin.pages.trendinggamestable' , compact('gamesdatas'));
    }

    public function mostplayedgames(){
        return view('admin.pages.most-played-games');
    }

    public function mostplayedgamestable(){
        $Mostplayed= Mostplayed::all();
        return view('admin.pages.mostplayedgame-table', compact('Mostplayed'));
    }

    public function topgames(){
        return view('admin.pages.top-category');
    }

    public function topgameslist(){
        $topplayed=topplayed::all();
        return view('admin.pages.top-category-lists',compact('topplayed'));
    }

    public function contactinfo(){
        return view('admin.pages.contactinfo');
    }

    public function contactinfodata(){
        $contactinfo =contactinfo::all();
        return view('admin.pages.contactinfo-data');
    }
}
