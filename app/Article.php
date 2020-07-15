<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'stock',
        'category_id',
        'color_id',
        'article_type_id',
        'measure_unit_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'color_id' => 'integer',
        'article_type_id' => 'integer',
        'measure_unit_id' => 'integer',
    ];


    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function color()
    {
        return $this->belongsTo(\App\Color::class);
    }

    public function articleType()
    {
        return $this->belongsTo(\App\ArticleType::class);
    }

    public function measureUnit()
    {
        return $this->belongsTo(\App\MeasureUnit::class);
    }
}
