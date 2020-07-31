<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number_estimate',
        'person_id',
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
        'person_id' => 'integer',
        'estado_id' => 'integer',
    ];


    public function person()
    {
        return $this->belongsTo(\App\Person::class);
    }

    public function estado()
    {
        return $this->belongsTo(\App\Estado::class);
    }
}
