<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\gamesrequest;
use App\Models\trendgames;
use Illuminate\Http\Request;

class TrendGamesController extends Controller
{
    //

    public function gameinfopost(gamesrequest $request)
    {
        $trendgames = new trendgames();
        $trendgames->saleprice = $request->saleprice;
        $trendgames->discountprice = $request->discountprice;
        $trendgames->gamename = $request->gamename;
        $trendgames->category = $request->category;
        $trendgames->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $trendgames->image = $imageName;
            $trendgames->save();
        }
        return redirect()->back()->with('success', 'Game Added Successfully');
    }

    public function gameinfoedit($id)
    {
        $trendgames = trendgames::find($id);
        return view('admin.pages.edit-trendgames', compact('trendgames'));
    }
    public function gameinfoupdate(gamesrequest $request, $id)
    {
        $trendgames = trendgames::find($id);
        $trendgames->saleprice = $request->saleprice;
        $trendgames->discountprice = $request->discountprice;
        $trendgames->gamename = $request->gamename;
        $trendgames->category = $request->category;
        $trendgames->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $trendgames->image = $imageName;
            $trendgames->save();
        }
        return redirect()->route('admin.games.table')->with('success', 'Game Updated Successfully');
    }

    public function gameinfodelete($id)
    {
        $trendgames = trendgames::find($id);
        $trendgames->delete();
        return redirect()->back()->with('success', 'Game Deleted Successfully');
    }

}
