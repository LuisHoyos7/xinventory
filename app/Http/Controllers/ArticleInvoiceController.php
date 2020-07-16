<?php

namespace App\Http\Controllers;

use App\ArticleInvoice;
use App\Http\Requests\ArticleInvoiceStoreRequest;
use App\Http\Requests\ArticleInvoiceUpdateRequest;
use Illuminate\Http\Request;

class ArticleInvoiceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articleInvoices = ArticleInvoice::all();

        return view('articleInvoice.index', compact('articleInvoices'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articleInvoice.create');
    }

    /**
     * @param \App\Http\Requests\ArticleInvoiceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleInvoiceStoreRequest $request)
    {
        $articleInvoice = ArticleInvoice::create($request->all());

        $request->session()->flash('articleInvoice.id', $articleInvoice->id);

        return redirect()->route('articleInvoice.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleInvoice $articleInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ArticleInvoice $articleInvoice)
    {
        return view('articleInvoice.show', compact('articleInvoice'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleInvoice $articleInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ArticleInvoice $articleInvoice)
    {
        return view('articleInvoice.edit', compact('articleInvoice'));
    }

    /**
     * @param \App\Http\Requests\ArticleInvoiceUpdateRequest $request
     * @param \App\ArticleInvoice $articleInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleInvoiceUpdateRequest $request, ArticleInvoice $articleInvoice)
    {
        $articleInvoice->update([]);

        $request->session()->flash('articleInvoice.id', $articleInvoice->id);

        return redirect()->route('articleInvoice.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleInvoice $articleInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ArticleInvoice $articleInvoice)
    {
        $articleInvoice->delete();

        return redirect()->route('articleInvoice.index');
    }
}
