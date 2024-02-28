<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque',
        'couleur',
        'nb_place',
        'modele',
        'nb_voiture',
        'dispo',
        'tarif',
        'imgV',
        
        
    ];
    public function reservations()
{
    return $this->hasMany(reservation::class, 'id_voiture', 'id');
}

}
