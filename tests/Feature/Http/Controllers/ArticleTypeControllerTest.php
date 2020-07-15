<?php

namespace Tests\Feature\Http\Controllers;

use App\ArticleType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ArticleTypeController
 */
class ArticleTypeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $articleTypes = factory(ArticleType::class, 3)->create();

        $response = $this->get(route('article-type.index'));

        $response->assertOk();
        $response->assertViewIs('articleType.index');
        $response->assertViewHas('articleTypes');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('article-type.create'));

        $response->assertOk();
        $response->assertViewIs('articleType.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleTypeController::class,
            'store',
            \App\Http\Requests\ArticleTypeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $articleType = $this->faker->word;

        $response = $this->post(route('article-type.store'), [
            'articleType' => $articleType,
        ]);

        $articleTypes = ArticleType::query()
            ->where('articleType', $articleType)
            ->get();
        $this->assertCount(1, $articleTypes);
        $articleType = $articleTypes->first();

        $response->assertRedirect(route('articleType.index'));
        $response->assertSessionHas('articleType.id', $articleType->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $articleType = factory(ArticleType::class)->create();

        $response = $this->get(route('article-type.show', $articleType));

        $response->assertOk();
        $response->assertViewIs('articleType.show');
        $response->assertViewHas('articleType');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $articleType = factory(ArticleType::class)->create();

        $response = $this->get(route('article-type.edit', $articleType));

        $response->assertOk();
        $response->assertViewIs('articleType.edit');
        $response->assertViewHas('articleType');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleTypeController::class,
            'update',
            \App\Http\Requests\ArticleTypeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $articleType = factory(ArticleType::class)->create();
        $articleType = $this->faker->word;

        $response = $this->put(route('article-type.update', $articleType), [
            'articleType' => $articleType,
        ]);

        $response->assertRedirect(route('articleType.index'));
        $response->assertSessionHas('articleType.id', $articleType->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $articleType = factory(ArticleType::class)->create();

        $response = $this->delete(route('article-type.destroy', $articleType));

        $response->assertRedirect(route('articleType.index'));

        $this->assertDeleted($articleType);
    }
}
