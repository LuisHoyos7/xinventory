<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleInvoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'invoice_id',
        'iva_id',
        'amount_article',
        'price_article',
        'discount',
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
        'iva_id' => 'integer',
        'price_article' => 'decimal',
        'discount' => 'decimal',
    ];


    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }

    public function invoice()
    {
        return $this->belongsTo(\App\Invoice::class);
    }

    public function iva()
    {
        return $this->belongsTo(\App\Iva::class);
    }
}
