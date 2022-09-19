<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function createContact()
    {
        // dd('test');
        return view('contact');
    }

    public function saveContact(Request $request)
    {
        // dd($request->all());
        $contact = new Contact();

        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Your contact request has been sent.');
    }
}
