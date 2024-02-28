<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateDebut',
        'dateRetour',
        'total',
        'id_voiture',
        'id_client',
        'lieu_prise',
        'lieu_rest',
    ];
      public function voiture()
    {
        return $this->belongsTo(voiture::class,'id_voiture');
    }

    public function client()
    {
        return $this->belongsTo(client::class,'id_client');
    }
}
