<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numtelephone',
        'date_naissance',
        'adresse',
        'date_permis',
    ];
    public function reservations()
    {
        return $this->hasMany(reservation::class,'id_client');
    }
}
