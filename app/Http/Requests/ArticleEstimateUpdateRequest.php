<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleEstimateUpdateRequest extends FormRequest
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
            'article_id' => 'required|integer|exists:articles,id',
            'estimate_id' => 'required|integer|exists:estimates,id',
            'iva_id' => 'required|integer|exists:ivas,id',
            'amount_article' => 'required|integer',
            'price_article' => 'required|numeric',
            'discount' => 'required|numeric',
            'interest' => 'required|numeric',
        ];
    }
}
