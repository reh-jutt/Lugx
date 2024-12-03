<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\gamesrequest;
use App\Models\Mostplayed;
class MostPlayedController extends Controller
{
    //
    public function mostplayedgameinfopost(gamesrequest $request)
    {
        $Mostplayed = new Mostplayed();
        $Mostplayed->gamename = $request->gamename;
        $Mostplayed->category = $request->category;
        $Mostplayed->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $Mostplayed->image = $imageName;
            $Mostplayed->save();
        }
        return redirect()->back()->with('success', 'Game Added Successfully');
    }

    public function mostplayedgameinfoedit($id)
    {
        $Mostplayed = Mostplayed::find($id);
        return view('admin.pages.edit-mostplayed-games', compact('Mostplayed'));
    }
    public function mostplayedgameinfoupdate(gamesrequest $request, $id)
    {
        $Mostplayed = Mostplayed::find($id);
        $Mostplayed->gamename = $request->gamename;
        $Mostplayed->category = $request->category;
        $Mostplayed->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $Mostplayed->image = $imageName;
            $Mostplayed->save();
        }
        return redirect()->route('admin.mostplayedgames.table')->with('success', 'Game Updated Successfully');
    }

    public function mostplayedgameinfodelete($id)
    {
        $Mostplayed = Mostplayed::find($id);
        $Mostplayed->delete();
        return redirect()->back()->with('success', 'Game Deleted Successfully');
    }

}

