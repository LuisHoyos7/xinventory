<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleEstimate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'estimate_id',
        'iva_id',
        'amount_article',
        'price_article',
        'discount',
        'interest',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_id' => 'integer',
        'estimate_id' => 'integer',
        'iva_id' => 'integer',
        'price_article' => 'decimal',
        'discount' => 'decimal',
        'interest' => 'decimal',
    ];


    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }

    public function estimate()
    {
        return $this->belongsTo(\App\Estimate::class);
    }

    public function iva()
    {
        return $this->belongsTo(\App\Iva::class);
    }
}
