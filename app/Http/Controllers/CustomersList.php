<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class CustomersList extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $customers = Person::where('is_customer', 1)
            ->where(function($query) use ($request) { 
                $query->where('dni', 'like', '%'.$request->input('term', '').'%')
                    ->orWhere('name', 'like', '%'.$request->input('term', '').'%');
            })
            ->get(['id', 'name as text']);

        return ['results' => $customers];
    }
}
