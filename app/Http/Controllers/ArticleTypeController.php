<?php

namespace App\Http\Controllers;

use App\ArticleType;
use App\Http\Requests\ArticleTypeStoreRequest;
use App\Http\Requests\ArticleTypeUpdateRequest;
use Illuminate\Http\Request;

class ArticleTypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articleTypes = ArticleType::all();

        return view('articleType.index', compact('articleTypes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articleType.create');
    }

    /**
     * @param \App\Http\Requests\ArticleTypeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleTypeStoreRequest $request)
    {
        $articleType = ArticleType::create($request->all());

        $request->session()->flash('articleType.id', $articleType->id);

        return redirect()->route('article-type.index')
            ->with('success' , 'Registro Agegado Con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleType $articleType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ArticleType $articleType)
    {
        return view('articleType.show', compact('articleType'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleType $articleType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ArticleType $articleType)
    {
        return view('articleType.edit', compact('articleType'));
    }

    /**
     * @param \App\Http\Requests\ArticleTypeUpdateRequest $request
     * @param \App\ArticleType $articleType
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleTypeUpdateRequest $request, ArticleType $articleType)
    {
    
        $articleType->update(['name' => $request->name]);

        $request->session()->flash('articleType.id', $articleType->id);

        return redirect()->route('article-type.index')
            ->with('info' , 'Registro Actualizado Con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\ArticleType $articleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ArticleType $articleType)
    {
        $articleType->delete();

        return redirect()->route('article-type.index')
            ->with('error' , 'Registro Eliminado Con Exito');
    }
}
