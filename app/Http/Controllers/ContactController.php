<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscriber;
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
                $message->to('info@squaregain.co');
                $message->cc('robyeomans1@gmail.com');
                $message->subject($request->subject);
            }
        );

        return redirect()->back()->with('success', 'Your contact request has been sent.');
    }

    public function createSubscriber()
    {
        return view('subscribe');
        // dd('test');
    }

    public function saveSubscriber(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'email' => 'required|email|unique:subscribers'
        ]);
        $subscriber = new Subscriber();

        $subscriber->email = $request->email;

        $subscriber->save();

        Mail::send(
            'emails.subscribe_email',
            array(
                'email' => $request->get('email')
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('robyeomans1@gmail.com');
                // $message->to('info@squaregain.co');
                // $message->cc('robyeomans1@gmail.com');
                $message->subject('We have a new subscriber!');
            }
        );

        // return redirect()->back()->with('success', 'Your contact request has been sent.');

        return view('subscribe')->with('success', 'Your contact request has been sent.');;
        // dd($request->all());
    }
}
// 