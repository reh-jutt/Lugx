<?php

namespace App\Http\Controllers\Admin;

use App\Models\contactinfo;
use App\Http\Requests\contactinforequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    //
    public function contactinfopost(contactinforequest $request)
    {
        $contactinfo = new contactinfo();
        $contactinfo->phone = $request->phone;
        $contactinfo->email = $request->email;
        $contactinfo->address = $request->address;
        $contactinfo->contactinfodescription = $request->contactinfodescription;
        $contactinfo->save();
        return redirect()->back()->with('success', 'Conatct Info Added Successfully');
    }

    public function contactinfoedit($id)
    {
        $contactinfo = contactinfo::find($id);
        return view('admin.pages.edit-contactinfo', compact('contactinfo'));
    }
    public function contactinfoupdate(contactinforequest $request, $id)
    {
        $contactinfo = contactinfo::find($id);
        $contactinfo->phone = $request->phone;
        $contactinfo->email = $request->email;
        $contactinfo->address = $request->address;
        $contactinfo->contactinfodescription = $request->contactinfodescription;
        $contactinfo->save();
        return redirect()->route('admin.contactinfo.data')->with('success', 'Contact Updated Successfully');
    }

    public function contactinfodelete($id)
    {
        $contactinfo = contactinfo::find($id);
        $contactinfo->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }

}
