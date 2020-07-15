<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
            'color_id' => 'required|integer|exists:colors,id',
            'article_type_id' => 'required|integer|exists:article_types,id',
            'measure_unit_id' => 'required|integer|exists:measure_units,id',
        ];
    }
}
