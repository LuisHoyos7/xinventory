<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;
use App\MeasureUnit;
use App\Color;
use App\Category;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $articleType = ArticleType::pluck('name', 'id');

        $color = Color::pluck('name', 'id');

        $measureUnit = MeasureUnit::pluck('name', 'id');

        $category = Category::pluck('name', 'id');

        return view('article.create', compact('articleType', 'color', 'measureUnit', 'category'));
    }

    /**
     * @param \App\Http\Requests\ArticleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        $article = Article::create($request->all());

        $request->session()->flash('article.id', $article->id);

        return redirect()->route('article.index')
            ->with('success' , 'Articulo creado Con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Article $article)
    {
        $articleType = ArticleType::pluck('name', 'id');

        $color = Color::pluck('name', 'id');

        $measureUnit = MeasureUnit::pluck('name', 'id');

        $category = Category::pluck('name', 'id');

        return view('article.edit', compact('article','articleType', 'color', 'measureUnit', 'category'));
    }

    /**
     * @param \App\Http\Requests\ArticleUpdateRequest $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request, Article $article)
    {
        $article->update([]);

        $request->session()->flash('article.id', $article->id);

        return redirect()->route('article.index')
            ->with('info' , 'Articulo creado Con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')
            ->with('error' , 'Articulo Eliminado Con Exito');
    }


}
