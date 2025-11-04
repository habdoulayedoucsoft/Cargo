<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieDepense extends Model
{
    protected $fillable = [
        'nom',
        'description',
    ];

    public function depenses()
    {
        return $this->hasMany(Depense::class, 'categorie_id');
    }
}
