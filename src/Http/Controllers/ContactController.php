<?php

namespace RomelPaano\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RomelPaano\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {


        $contact = resolve(Contact::class);

        $contact->create($request->all());

        return back();
    }
}
