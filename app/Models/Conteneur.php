<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conteneur extends Model
{
    protected $fillable = [
        'numero',
        'capacite',
        'statut',
        'date_arrivee',
    ];

    public function packlists()
    {
        return $this->hasMany(Packlist::class, 'container_id');
    }

    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }
}
