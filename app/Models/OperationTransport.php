<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationTransport extends Model
{
    protected $fillable = [
        'vehicule_id',
        'conteneur_id',
        'cout_transport',
        'revenu_transport',
        'date_operation',
        'statut',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }

    public function conteneur()
    {
        return $this->belongsTo(Vehicule::class, 'conteneur_id');
    }
}
