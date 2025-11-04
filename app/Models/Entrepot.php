<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrepot extends Model
{
    protected $fillable = [
        'nom',
        'adresse',
        'capacite',
        // 'responsable',
    ];

    public function colis()
    {
        return $this->hasMany(Colis::class);
    }

    public function mouvementStocks()
    {
        return $this->hasMany(MouvementStock::class);
    }
}
