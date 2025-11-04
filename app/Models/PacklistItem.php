<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PacklistItem extends Model
{
    protected $fillable = [
        'packlist_id',
        'customer_id',
        'tel_no',
        'cargo_bills',
        'bale_no',
        'description',
        'goods',
        'cbm',
        'unit_price',
        'amount',
    ];

    public function packlist()
    {
        return $this->belongsTo(Packlist::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
