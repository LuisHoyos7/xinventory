<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'article_id',
        'invoice_id',
        'estimate_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_id' => 'integer',
        'invoice_id' => 'integer',
        'estimate_id' => 'integer',
    ];


    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }

    public function invoice()
    {
        return $this->belongsTo(\App\Invoice::class);
    }

    public function estimate()
    {
        return $this->belongsTo(\App\Estimate::class);
    }
}
