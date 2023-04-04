<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class NewsletterController extends Controller
{

    public function index()
    {
        $newsletters = Newsletter::all();

        return view('news letter.index', compact('newsletters'));
    }

    public function create()
    {
        return view('news letter.create');
    }

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email'
        ]);

        // Sauvegarde d'email news letter visiteur dans la bd
        Newsletter::create($data);

        return redirect('/')->with('confirmation_newsletter', 'Votre souscription à notre lettre d\'information est éffective');
    }

    //affichage du patient
    public function show(Newsletter $newsletter)
    {  

        return view('news letter.show', compact('newsletter'));
    }

    //Suppression d'un patient
    public function destroy(Newsletter $newsletter){

        $newsletter->delete();

        return redirect('news-letter')->with('message', 'Adresse supprimée!!');
    }
}