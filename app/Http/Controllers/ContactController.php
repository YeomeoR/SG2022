<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function createContact()
    {
        // dd('test');
        return view('contact');
    }

    public function saveContact(Request $request)
    {

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        // dd($request->all());
        $contact = new Contact();

        $contact->fname = $request->fname;
        $contact->lname = $request->lname;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        Mail::send(
            'emails.contact_email',
            array(
                'fname' => $request->get('fname'),
                'lname' => $request->get('lname'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('info@squaregain.com');
                $message->cc('robyeomans1@gmail.com');
                $message->subject($request->subject);
            }
        );

        return redirect()->back()->with('success', 'Your contact request has been sent.');
    }
}
