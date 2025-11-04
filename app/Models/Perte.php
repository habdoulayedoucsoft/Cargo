<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perte extends Model
{
    protected $fillable = [
        'date',
        'montant_total',
        'cause_perte',
        'commentaire',
    ];

    public function items()
    {
        return $this->hasMany(PerteItem::class);
    }
}
