<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MouvementStockItem extends Model
{
    protected $fillable = [
        'mouvement_stock_id',
        'colis_id',
        'quantite',
        'price',
        'montant',
    ];

    public function mouvementStock()
    {
        return $this->belongsTo(MouvementStock::class);
    }

    public function colis()
    {
        return $this->belongsTo(Colis::class);
    }
}
