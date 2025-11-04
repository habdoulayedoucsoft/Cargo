<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'customer_id',
        'type',
        'message',
        'date_envoi',
        'statut',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
