<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientRequest;
use App\Http\Requests\reservationRequest;
use App\Models\client;
use App\Models\voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{


    public function index()
    {
        $clients = client::all();
        return view('admin.dashboard.client',compact('clients'));
        
    }

    public function deleteClient($id) {
        $client = Client::find($id);
    
        // Supprimer les réservations associées au client
        $client->reservations()->delete();
    
        // Supprimer le client
        $client->delete();
    
        return redirect('listeClientAdmin');
    }



    public function updateclient($id) {
        $client= client::find($id);

        return view('admin.dashboard.updateClient',compact('client'));
    }

    public function updateclient_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'numtelephone'=>'required',
            'date_naissance'=>'required',
            'date_permis'=>'required',
            'adresse'=>'required',
            'email'=>'required',
        ]);
        $client= client::find($request->id);
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->numtelephone=$request->numtelephone;
        $client->date_naissance=$request->date_naissance;
        $client->adresse=$request->adresse;
        $client->email=$request->email;
        $client->update();
        return redirect('listeClientAdmin');
    }
   
}
