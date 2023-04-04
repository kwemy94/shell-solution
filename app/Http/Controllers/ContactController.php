<?php

namespace App\Http\Controllers;

use App\ClientMessage;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Sauvegarde d'email dans la bd
        ClientMessage::create($data);

        Mail::to('grantshell0@gmail.com')->send(new ContactMail($data));

        return redirect('contact')->with('message', 'Votre message à bien été envoyé!!');
    }
}
