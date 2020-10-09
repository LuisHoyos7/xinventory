<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesList extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $customers = Article::where('is_active', 1)
            ->where(function($query) use ($request) { 
                $query->where('name', 'like', '%'.$request->input('term', '').'%')
                    ->orWhere('reference', 'like', '%'.$request->input('term', '').'%');
            })
            ->get(['id', 'name as text']);

        return ['results' => $customers];
    }
}
