<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = [
        'type_depense',
        'montant',
        'categorie_id',
        // 'conteneur_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(CategorieDepense::class, 'categorie_id');
    }

    // public function conteneur()
    // {
    //     return $this->belongsTo(Conteneur::class);
    // }
}
