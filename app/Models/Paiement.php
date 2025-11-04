<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'customer_id',
        'colis_id',
        'montant_paye',
        'taxe_payement',
        'date_paiement',
        'date_limite_paiement',
        'mode_paiement',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function colis()
    {
        return $this->belongsTo(Colis::class);
    }

    public function rapportClients()
    {
        return $this->hasMany(RapportClient::class);
    }
}
