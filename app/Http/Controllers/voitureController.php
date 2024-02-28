<?php

namespace App\Http\Controllers;

use App\Http\Requests\voitureRequest;
use App\Models\voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class voitureController extends Controller
{
    public function index()
    {
        return view('home.vehicule');
    }
    public function index2()
    {
        return view('admin.dashboard.addVoiture');
    }
    public function index3()
    {
        $voitures = voiture::all();
        return view('admin.dashboard.voitures',compact('voitures'));
        
    }
    public function filter()
    {
        $voitures=Session::get('voitures_dispo');
        return view('home.listvoitureFilter',compact('voitures'));
    }
    public function list_user()
    {
        $voitures = voiture::all();
        return view('home.vehicule',compact('voitures'));
    }
    public function store(voitureRequest $request) {
        $forms=$request->validated();
        //dd($request->couleur);
        $forms['imgV']=$request->file('imgV')->store('voitures','public');
        voiture::create($forms);
        return redirect()->route('dash_admin');
    }

    public function deletevoiture($id) {
        $voiture= voiture::find($id);
        $voiture->reservations()->delete();
        $voiture->delete();
        return redirect('listevoiture');

    }
    public function updatevoiture($id) {
        $voiture= voiture::find($id);

        return view('admin.dashboard.updatevoiture',compact('voiture'));
    }

    public function updatevoiture_traitement(Request $request)
    {
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            // 'imgV'=>'required',
            'couleur'=>'required',
            // 'nb_place'=>'required',
            'nb_voiture'=>'required',
            // 'dispo'=>'required',
            'tarif'=>'required',
        ]);
        $voiture= voiture::find($request->id);
        $voiture->marque=$request->marque;
        $voiture->modele=$request->modele;
        // $voiture->imgV=$request->imgV;
        $voiture->couleur=$request->couleur;
        // $voiture->nb_place=$request->nb_place;
        $voiture->nb_voiture=$request->nb_voiture;
        // $voiture->dispo=$request->dispo;
        $voiture->tarif=$request->tarif;
        $voiture->update();
        return redirect('listevoiture');
    }
    public function listPromo() {
        $voitures=voiture::all();
    
        $voitureRecemende=[];
        foreach($voitures as $voiture){
            if((($voiture->tarif)>60)&&($voiture->tarif<130))
            {
                $voitureRecemende[]=$voiture;
            }
        }
        return view('home.home',compact('voitureRecemende'));
        
    }
}
