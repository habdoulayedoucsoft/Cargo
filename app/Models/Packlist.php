<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packlist extends Model
{
    protected $fillable = [
        'shipping_company',
        'container_numero',
        'seal_numero',
        'consignee_name',
        'port',
        'loaded_date',
        'date_of_arrive',
        'tel',
        'container_id',
    ];

    public function conteneur()
    {
        return $this->belongsTo(Conteneur::class, 'container_id');
    }

    public function items()
    {
        return $this->hasMany(PacklistItem::class);
    }
}
