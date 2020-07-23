<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number_invoice',
        'person_id',
        'payment_type_id',
        'estado_id',
        'date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function person()
    {
        return $this->belongsTo(\App\Person::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(\App\PaymentType::class);
    }

    public function estado()
    {
        return $this->belongsTo(\App\Estado::class);
    }
}
