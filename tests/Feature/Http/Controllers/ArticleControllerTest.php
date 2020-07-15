<?php

namespace Tests\Feature\Http\Controllers;

use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ArticleController
 */
class ArticleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $articles = factory(Article::class, 3)->create();

        $response = $this->get(route('article.index'));

        $response->assertOk();
        $response->assertViewIs('article.index');
        $response->assertViewHas('articles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('article.create'));

        $response->assertOk();
        $response->assertViewIs('article.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleController::class,
            'store',
            \App\Http\Requests\ArticleStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $article = $this->faker->word;

        $response = $this->post(route('article.store'), [
            'article' => $article,
        ]);

        $articles = Article::query()
            ->where('article', $article)
            ->get();
        $this->assertCount(1, $articles);
        $article = $articles->first();

        $response->assertRedirect(route('article.index'));
        $response->assertSessionHas('article.id', $article->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $article = factory(Article::class)->create();

        $response = $this->get(route('article.show', $article));

        $response->assertOk();
        $response->assertViewIs('article.show');
        $response->assertViewHas('article');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $article = factory(Article::class)->create();

        $response = $this->get(route('article.edit', $article));

        $response->assertOk();
        $response->assertViewIs('article.edit');
        $response->assertViewHas('article');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleController::class,
            'update',
            \App\Http\Requests\ArticleUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $article = factory(Article::class)->create();
        $article = $this->faker->word;

        $response = $this->put(route('article.update', $article), [
            'article' => $article,
        ]);

        $response->assertRedirect(route('article.index'));
        $response->assertSessionHas('article.id', $article->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $article = factory(Article::class)->create();

        $response = $this->delete(route('article.destroy', $article));

        $response->assertRedirect(route('article.index'));

        $this->assertDeleted($article);
    }
}
