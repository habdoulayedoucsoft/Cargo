<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RapportClient extends Model
{
    protected $fillable = [
        'customer_id',
        'paiement_id',
        'date_reception',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }
}
