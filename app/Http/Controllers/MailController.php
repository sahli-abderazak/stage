<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index()  {
        return view('home.contact') ;
    }
    public function send(Request $request) {
        
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'sujet' => 'required',
            'contenu' => 'required',
        ]);

        // Récupérez les données du formulaire
        $nom = $request->input('nom');
        $email = $request->input('email');
        $sujet = $request->input('sujet');
        $contenu = $request->input('contenu');

        if($this->isOnline()){

            $mail = new ContactFormMail($nom, $email, $sujet, $contenu);

            // Utilisez la méthode from pour définir l'expéditeur
            $mail->from($email,$nom);
            //dd($mail);
            $mail->replyTo($email, $nom);
            // Envoyez l'e-mail en utilisant send() après avoir défini l'expéditeur
            Mail::to('rzsa1234@gmail.com')->send($mail);

            return redirect()->back()->with('success','votre email  a ete envoyee avec succes!');
        }
        else{
                return redirect()->back()->withInput()->with('Error','Check your internet connection');
        }

    }
    public function isOnline($site="https://www.youtube.com/") {
        if(@fopen($site,"r")){
            return true;
        }
        else{
            return false;
        }
    }
}