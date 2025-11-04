<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    protected $fillable = [
        'numero',
        'description',
        'customer_id',
        'colis_type',
        'entrepot_id',
        'price',
        'statut',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function entrepot()
    {
        return $this->belongsTo(Entrepot::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function perteItems()
    {
        return $this->hasMany(PerteItem::class);
    }

    public function mouvementStockItems()
    {
        return $this->hasMany(MouvementStockItem::class);
    }
}
