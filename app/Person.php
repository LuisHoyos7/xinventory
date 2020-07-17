<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'direction',
        'mobile',
        'mail',
        'is_customer',
        'is_worker',
        'is_provider',
        'nuip',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_customer' => 'boolean',
        'is_worker' => 'boolean',
        'is_provider' => 'boolean',
    ];
}
