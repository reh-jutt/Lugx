<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

class ContactController extends Controller
{
    //
    public function ContactRequest(Request $request){

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]
        );
        $contact =new Contact();
        $contact->name=$request->name;
        $contact->surname=$request->surname;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        // return view('front.pages.contact-us');
        Mail::to($contact->email)->send(new ContactUsEmail($contact));
        return redirect()->route('Index')->with('success', 'Email sent successfully!');
    }
    public function table(){
        return view('front.pages.table');
    }
    public function getContactRequest(){
        $requests=contact::all();
        return view('front.pages.table', compact('requests'));
    }
    public function edit(Request $request){
        $id = $request->id;
        $contact = contact::find($id);

        return view('front.pages.edit-contact-us', compact('contact'));
    }
    public function update(Request $request,$id){




    }
}
