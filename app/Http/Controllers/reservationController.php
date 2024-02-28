<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\reservationRequest;
use App\Models\client;
use App\Models\reservation;
use App\Models\voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class reservationController extends Controller
{
    public function index(voiture $voiture)
    {
        Session::put('voiture', $voiture);
        return view('home.reservation',compact('voiture'));
    }
    public function store(Request $request,voiture $voiture) {
        $request->validate([
            'nom' => 'required',
            'prenom' =>'required',
            'email' =>'required',
            'numtelephone' =>'required',
            'adresse' =>'required',
            // 'date_naissance'=>'required',
            'date_naissance' => 'required|date|before_or_equal:' . Carbon::now()->subYears(20)->format('Y-m-d'),

            // 'date_permis'=>'required',
            // 'date_permis' =>'required|date|before_or_equal:' . Carbon::now()->subYears(2)->format('Y-m-d').'|custom_age_check:date_naissance,20',
            'date_permis' =>'required|date|before_or_equal:' . Carbon::now()->subYears(2)->format('Y-m-d'),
            // 'dateDebut' => [
            //     'required',
            //     'date',
            //     // 'after_or_equal' => now(),
            // ],
            'dateDebut' => 'required|date|after_or_equal:' . Carbon::now()->format('Y-m-d'),
            // 'dateRetour' => [
            //     'required',
            //     'date',
            //     'after:dateDebut',
            // ], 
            'dateRetour' => 'required|date|after:dateDebut',

        ]);
        $isVoitureDispo = $voiture->reservations()->where(function ($query) use ($request) {
            $query->where('dateDebut', '>=', $request->dateDebut)
                ->where('dateDebut', '<=', $request->dateRetour)
                ->orWhere(function ($q) use ($request) {
                    $q->where('dateRetour', '>=', $request->dateDebut)
                        ->where('dateRetour', '<=', $request->dateRetour);
                });
        })->doesntExist();
        //dd($isVoitureDispo);
        $voitureId=$voiture->id;
        $nbVoitureTotal = $voiture->nb_voiture;
        //dd($nbVoitureTotal);
        // dd($isVoitureDispo);
    $nbVoitureReservee = voiture::find($voitureId)->reservations()->where(function ($query) use ($request) {
        $query->where('dateDebut', '>=', $request->dateDebut)
            ->where('dateDebut', '<=', $request->dateRetour)
            ->orWhere(function ($q) use ($request) {
                $q->where('dateRetour', '>=', $request->dateDebut)
                    ->where('dateRetour', '<=', $request->dateRetour);
            });
    })->count();;
    // ->where(function ($q) use ($request) {
    //     $q->where('dateDebut', '>=', $request->dateDebut)
    //         ->where('dateDebut', '<=', $request->dateRetour);
    // })->orWhere(function ($q) use ($request) {
    //     $q->where('dateRetour', '>=', $request->dateDebut)
    //         ->where('dateRetour', '<=', $request->dateRetour);
    // })
    
           // dd( $nbVoitureReservee);
    
         $nbVoitureDispo = $nbVoitureTotal - $nbVoitureReservee;
          //dd($nbVoitureDispo);
    
        if ( $isVoitureDispo ||($nbVoitureDispo>0)) {
            // La voiture spécifique est disponible pour les dates sélectionnées
            // Continuez avec le reste du code de la méthode store

            $client = client::create([
                'nom' =>$request->nom,
                'prenom' => $request->prenom,
                'adresse' => $request->adresse,
                'email' => $request->email,
                'numtelephone' =>$request->numtelephone,
                'date_naissance' => $request->date_naissance,
                'date_permis' => $request->date_permis,
            ]); 
        // dd($client);

   
    
        // Calculer la différence entre dateRetour et dateDebut en jours
        $dateDebut = \Carbon\Carbon::parse($request->dateDebut);
        $dateRetour = \Carbon\Carbon::parse($request->dateRetour);
        $differenceEnJours = $dateRetour->diffInDays($dateDebut);
    
    //     // Calculer le total en multipliant la différence par le tarif
        // $total = 0;
        $total=$differenceEnJours*($voiture->tarif);





    
        // Créer la réservation en associant le client
       $rev= reservation::create([
            'dateDebut' => $request->dateDebut,
            'dateRetour' => $request->dateRetour,
            'lieu_prise' => $request->lieu_prise,
            'lieu_rest' => $request->lieu_rest,
            'total' => $total,
            'id_voiture' => $voiture->id,
            'id_client' => $client->id,
        ]);

         return redirect()->route('reservation.confirmed',compact('voiture'));

        } else {
            // Affichez un message d'erreur ou redirigez l'utilisateur avec un message approprié
            return redirect()->back()->withErrors(['message' => 'La voiture sélectionnée n\'est pas disponible pour les dates spécifiées.']);
        }
    
       
    }
    public function index2(voiture $voiture)
    {
        //Session::put('voiture', $voiture);
        return view('home.confirm',compact('voiture'));
    }
     

public function filter(Request $request)
{
        $lieu_prise = $request->lieu_prise;
    $lieu_rest = $request->lieu_rest;
    $dateDebut = $request->dateDebut;
    $dateRetour = $request->dateRetour;


             Session::put('lieu_prise',$lieu_prise);
        Session::put('lieu_rest',$lieu_rest);
        Session::put('dateDebut',$dateDebut);
        Session::put('dateRetour',$dateRetour);

        // dd($dateDebut);


        //filter nbr
       // Récupérer toutes les voitures
       $voituresDispo = [];
$voitures = Voiture::all();

foreach ($voitures as $voiture) {
    $model = $voiture->id;

    // Compter le nombre total de réservations pour le modèle spécifique
    $nbVoitureReservee = Reservation::where(function ($q) use ($request, $model) {
        $q->where('dateDebut', '>=', $request->dateDebut)
            ->where('dateDebut', '<=', $request->dateRetour)
            ->where('id_voiture', $model);
    })->orWhere(function ($q) use ($request, $model) {
        $q->where('dateRetour', '>=', $request->dateDebut)
            ->where('dateRetour', '<=', $request->dateRetour)
            ->where('id_voiture', $model);
    })->count();

    // Nombre total de voitures pour le modèle spécifique
    $nbVoitureTotal = Voiture::where('id', $model)->sum('nb_voiture');

    // Nombre de voitures disponibles pour le modèle spécifique
    $nbVoitureDispo = $nbVoitureTotal - $nbVoitureReservee;
    if( $nbVoitureDispo>0){
        $voituresDispo[] = $voiture;
    }else
    {
        $isVoitureDispo = $voiture->reservations()->where(function ($query) use ($request) {
            $query->where('dateDebut', '>=', $request->dateDebut)
                ->where('dateDebut', '<=', $request->dateRetour)
                ->orWhere(function ($q) use ($request) {
                    $q->where('dateRetour', '>=', $request->dateDebut)
                        ->where('dateRetour', '<=', $request->dateRetour);
                });
        })->doesntExist();
        if($isVoitureDispo)
        {
            $voituresDispo[] = $voiture;
        }
    }

    // Faire quelque chose avec $nbVoitureDispo (peut-être l'ajouter à un tableau, le stocker, etc.)
}



        Session::put('voitures_dispo',$voituresDispo);

    // Faire d'autres opérations ou renvoyer les résultats à la vue
        return redirect()->route('listevoiture.filteree');
    // return view('home.listvoitureFilter', compact('voituresDispo'));
}

//admin
public function reservationShow()
{
    $reservations = reservation::all();
    //$marque=
    return view('admin.dashboard.reservationAdmin',compact('reservations'));
    
}
// public function deleteReservation($id) {
//     $reservation= reservation::find($id);
//     $reservation->delete();
//     return redirect('dash_admin');

// }
public function deleteReservation($id) {
    $reservation = Reservation::find($id);

    if ($reservation) {
        // Supprimer la réservation
        $reservation->delete();

        // Supprimer le client associé (s'il existe)
        $client = Client::find($reservation->id_client);
        if ($client) {
            $client->delete();
        }

        return redirect('dash_admin')->with('success', 'La réservation et le client associé ont été supprimés avec succès.');
    } else {
        return redirect('dash_admin')->with('error', 'La réservation n\'existe pas.');
    }
}




}
   