<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MouvementStock extends Model
{
    protected $fillable = [
        'date',
        'customer_id',
        'reference',
        'type',
        'total',
        'entrepot_id',
        'commentaire',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function entrepot()
    {
        return $this->belongsTo(Entrepot::class);
    }

    public function mouvementstockitems()
    {
        return $this->hasMany(MouvementStockItem::class);
    }
}
