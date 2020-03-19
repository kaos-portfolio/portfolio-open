<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactSent;
use AppMailContactSent;
use Mail;


class ContactController extends Controller
{
    public function form()
    {
        return view('contact');
    }
    public function confirm(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'company'  => 'required',
            'email' => 'required|email',
            'message' => 'required|present',
        ]);

        $contact = new Contact($request->all());

        return view('confirm', compact('contact'));
    }
    public function process(Request $request) {

        $action = $request->get('action', 'back');

        $input = $request->except('action');


        if($action === '送信する') {
            $contact = Contact::make($request->all());
            Mail::to($request->email)->send(new ContactSent($contact));
            $contact->save();

            return view('complete');
        } else {
            return redirect()->action('ContactController@form')->withInput($input);
        }
    }
}
