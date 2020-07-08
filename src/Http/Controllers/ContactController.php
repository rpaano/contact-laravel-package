<?php

namespace RomelPaano\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use RomelPaano\Contact\Mail\ContactMailable;
use RomelPaano\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to('12345678i@gmail.com')->send(new ContactMailable($request));

        $contact = resolve(Contact::class);
        $contact->create($request->all());

        return back();
    }
}
