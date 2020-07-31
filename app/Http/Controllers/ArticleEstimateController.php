<?php

namespace App\Http\Controllers;

use App\ArticleEstimate;
use App\Http\Requests\ArticleEstimateStoreRequest;
use App\Http\Requests\ArticleEstimateUpdateRequest;
use Illuminate\Http\Request;

class ArticleEstimateController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articleEstimates = ArticleEstimate::all();

        return view('articleEstimate.index', compact('articleEstimates'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articleEstimate.create');
    }

    /**
     * @param \App\Http\Requests\ArticleEstimateStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleEstimateStoreRequest $request)
    {
        $articleEstimate = ArticleEstimate::create($request->validated());

        $request->session()->flash('articleEstimate.id', $articleEstimate->id);

        return redirect()->route('articleEstimate.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleEstimate $articleEstimate
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ArticleEstimate $articleEstimate)
    {
        return view('articleEstimate.show', compact('articleEstimate'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleEstimate $articleEstimate
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ArticleEstimate $articleEstimate)
    {
        return view('articleEstimate.edit', compact('articleEstimate'));
    }

    /**
     * @param \App\Http\Requests\ArticleEstimateUpdateRequest $request
     * @param \App\ArticleEstimate $articleEstimate
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleEstimateUpdateRequest $request, ArticleEstimate $articleEstimate)
    {
        $articleEstimate->update($request->validated());

        $request->session()->flash('articleEstimate.id', $articleEstimate->id);

        return redirect()->route('articleEstimate.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleEstimate $articleEstimate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ArticleEstimate $articleEstimate)
    {
        $articleEstimate->delete();

        return redirect()->route('articleEstimate.index');
    }
}
