<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\topplayedrequest;
use App\Models\topplayed;
use Illuminate\Http\Request;
class TopCategoryController extends Controller
{
    //
    public function topgamesinfopost(topplayedrequest $request)
    {
        $topplayed = new topplayed();
        $topplayed->category = $request->category;
        $topplayed->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $topplayed->image = $imageName;
            $topplayed->save();
        }
        return redirect()->back()->with('success', 'Game Added Successfully');
    }

    public function topgameinfoedit($id)
    {
        $topplayed = topplayed::find($id);
        return view('admin.pages.edit-top-category', compact('topplayed'));
    }
    public function topgameinfoupdate(topplayedrequest $request, $id)
    {
        $topplayed = topplayed::find($id);
        $topplayed->category = $request->category;
        $topplayed->save();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $topplayed->image = $imageName;
            $topplayed->save();
        }
        return redirect()->route('admin.topgames.table')->with('success', 'Game Updated Successfully');
    }

    public function topgameinfodelete($id)
    {
        $topplayed = topplayed::find($id);
        $topplayed->delete();
        return redirect()->back()->with('success', 'Game Deleted Successfully');
    }
}
