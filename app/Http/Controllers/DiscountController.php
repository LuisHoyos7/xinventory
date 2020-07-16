<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Article;
use App\Http\Requests\DiscountStoreRequest;
use App\Http\Requests\DiscountUpdateRequest;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $discounts = Discount::all();

        return view('discount.index', compact('discounts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $articles = Article::all();

        return view('discount.create', compact('articles'));
    }

    /**
     * @param \App\Http\Requests\DiscountStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountStoreRequest $request)
    {
        
        $discount = Discount::create($request->all());

        $request->session()->flash('discount.id', $discount->id);

        return redirect()->route('discount.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Discount $discount)
    {
        return view('discount.show', compact('discount'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Discount $discount)
    {
        return view('discount.edit', compact('discount'));
    }

    /**
     * @param \App\Http\Requests\DiscountUpdateRequest $request
     * @param \App\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function update(DiscountUpdateRequest $request, Discount $discount)
    {
        $discount->update([]);

        $request->session()->flash('discount.id', $discount->id);

        return redirect()->route('discount.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Discount $discount)
    {
        $discount->delete();

        return redirect()->route('discount.index');
    }

    public function discountStock(Request $request){

        foreach($request->detalle as $id=>$index)
        {
            foreach($index as $index=>$discount)
            {
                $article = Article::findOrFail($id);

                Discount::create([
                    'article_id' => $id,
                    'previousStock' => $article->stock,
                    'amount' => $discount
                ]);

                $article = Article::findOrFail($id);

                $discount = $article->stock - $discount;

                $article->update(['stock' => $discount]);
                
            }
            
        }

        return redirect()->route('discount.index')
            ->with('success' , 'Se ha descontado del Stock Correctamente');
    }

    public function getArticleStock(Article $article)
    {
        return  response()->json($article);
    }
}
