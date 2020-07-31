<?php

namespace Tests\Feature\Http\Controllers;

use App\Article;
use App\ArticleEstimate;
use App\Estimate;
use App\Iva;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ArticleEstimateController
 */
class ArticleEstimateControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $articleEstimates = factory(ArticleEstimate::class, 3)->create();

        $response = $this->get(route('article-estimate.index'));

        $response->assertOk();
        $response->assertViewIs('articleEstimate.index');
        $response->assertViewHas('articleEstimates');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('article-estimate.create'));

        $response->assertOk();
        $response->assertViewIs('articleEstimate.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleEstimateController::class,
            'store',
            \App\Http\Requests\ArticleEstimateStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $article = factory(Article::class)->create();
        $estimate = factory(Estimate::class)->create();
        $iva = factory(Iva::class)->create();
        $amount_article = $this->faker->numberBetween(-10000, 10000);
        $price_article = $this->faker->randomFloat(/** decimal_attributes **/);
        $discount = $this->faker->randomFloat(/** decimal_attributes **/);
        $interest = $this->faker->randomFloat(/** decimal_attributes **/);

        $response = $this->post(route('article-estimate.store'), [
            'article_id' => $article->id,
            'estimate_id' => $estimate->id,
            'iva_id' => $iva->id,
            'amount_article' => $amount_article,
            'price_article' => $price_article,
            'discount' => $discount,
            'interest' => $interest,
        ]);

        $articleEstimates = ArticleEstimate::query()
            ->where('article_id', $article->id)
            ->where('estimate_id', $estimate->id)
            ->where('iva_id', $iva->id)
            ->where('amount_article', $amount_article)
            ->where('price_article', $price_article)
            ->where('discount', $discount)
            ->where('interest', $interest)
            ->get();
        $this->assertCount(1, $articleEstimates);
        $articleEstimate = $articleEstimates->first();

        $response->assertRedirect(route('articleEstimate.index'));
        $response->assertSessionHas('articleEstimate.id', $articleEstimate->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $articleEstimate = factory(ArticleEstimate::class)->create();

        $response = $this->get(route('article-estimate.show', $articleEstimate));

        $response->assertOk();
        $response->assertViewIs('articleEstimate.show');
        $response->assertViewHas('articleEstimate');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $articleEstimate = factory(ArticleEstimate::class)->create();

        $response = $this->get(route('article-estimate.edit', $articleEstimate));

        $response->assertOk();
        $response->assertViewIs('articleEstimate.edit');
        $response->assertViewHas('articleEstimate');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleEstimateController::class,
            'update',
            \App\Http\Requests\ArticleEstimateUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $articleEstimate = factory(ArticleEstimate::class)->create();
        $article = factory(Article::class)->create();
        $estimate = factory(Estimate::class)->create();
        $iva = factory(Iva::class)->create();
        $amount_article = $this->faker->numberBetween(-10000, 10000);
        $price_article = $this->faker->randomFloat(/** decimal_attributes **/);
        $discount = $this->faker->randomFloat(/** decimal_attributes **/);
        $interest = $this->faker->randomFloat(/** decimal_attributes **/);

        $response = $this->put(route('article-estimate.update', $articleEstimate), [
            'article_id' => $article->id,
            'estimate_id' => $estimate->id,
            'iva_id' => $iva->id,
            'amount_article' => $amount_article,
            'price_article' => $price_article,
            'discount' => $discount,
            'interest' => $interest,
        ]);

        $articleEstimate->refresh();

        $response->assertRedirect(route('articleEstimate.index'));
        $response->assertSessionHas('articleEstimate.id', $articleEstimate->id);

        $this->assertEquals($article->id, $articleEstimate->article_id);
        $this->assertEquals($estimate->id, $articleEstimate->estimate_id);
        $this->assertEquals($iva->id, $articleEstimate->iva_id);
        $this->assertEquals($amount_article, $articleEstimate->amount_article);
        $this->assertEquals($price_article, $articleEstimate->price_article);
        $this->assertEquals($discount, $articleEstimate->discount);
        $this->assertEquals($interest, $articleEstimate->interest);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $articleEstimate = factory(ArticleEstimate::class)->create();

        $response = $this->delete(route('article-estimate.destroy', $articleEstimate));

        $response->assertRedirect(route('articleEstimate.index'));

        $this->assertDeleted($articleEstimate);
    }
}
