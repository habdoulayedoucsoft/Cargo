<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerteItem extends Model
{
    protected $fillable = [
        'perte_id',
        'colis_id',
        'montant',
    ];

    public function perte()
    {
        return $this->belongsTo(Perte::class);
    }

    public function colis()
    {
        return $this->belongsTo(Colis::class);
    }
}
