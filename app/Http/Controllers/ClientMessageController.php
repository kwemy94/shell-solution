<?php

namespace App\Http\Controllers;

use App\ClientMessage;
use Illuminate\Http\Request;

class ClientMessageController extends Controller
{
    // index recupère les données de la bd et envoie a une vue
    public function index(){
        $messages = ClientMessage::all();

        return view('dashboard.message.index', compact('messages'));
    }

    /* transfert de donnée pour envoyer un email*/
    public function show(ClientMessage $message){

        // $message = ClientMessage::where('id', $message)->firstOrFail();  //retourne une erreur 404 si le client n'est pas trouvé

        return view('dashboard.patients.show', compact('message'));
    }

}
