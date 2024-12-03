<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function gamesform(){
        return view('admin.pages.addgames');
    }
    public function gamesdata(){
        return view('');
    }
}
