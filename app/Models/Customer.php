<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'adresse',
        'phone',
        'email',
    ];

    public function colis()
    {
        return $this->hasMany(Colis::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function packlistItems()
    {
        return $this->hasMany(PacklistItem::class);
    }

    public function rapportClients()
    {
        return $this->hasMany(RapportClient::class);
    }

    public function mouvementStocks()
    {
        return $this->hasMany(MouvementStock::class);
    }
}
