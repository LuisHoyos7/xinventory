<?php

namespace Tests\Feature\Http\Controllers;

use App\ArticleInvoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ArticleInvoiceController
 */
class ArticleInvoiceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $articleInvoices = factory(ArticleInvoice::class, 3)->create();

        $response = $this->get(route('article-invoice.index'));

        $response->assertOk();
        $response->assertViewIs('articleInvoice.index');
        $response->assertViewHas('articleInvoices');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('article-invoice.create'));

        $response->assertOk();
        $response->assertViewIs('articleInvoice.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleInvoiceController::class,
            'store',
            \App\Http\Requests\ArticleInvoiceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $articleInvoice = $this->faker->word;

        $response = $this->post(route('article-invoice.store'), [
            'articleInvoice' => $articleInvoice,
        ]);

        $articleInvoices = ArticleInvoice::query()
            ->where('articleInvoice', $articleInvoice)
            ->get();
        $this->assertCount(1, $articleInvoices);
        $articleInvoice = $articleInvoices->first();

        $response->assertRedirect(route('articleInvoice.index'));
        $response->assertSessionHas('articleInvoice.id', $articleInvoice->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $articleInvoice = factory(ArticleInvoice::class)->create();

        $response = $this->get(route('article-invoice.show', $articleInvoice));

        $response->assertOk();
        $response->assertViewIs('articleInvoice.show');
        $response->assertViewHas('articleInvoice');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $articleInvoice = factory(ArticleInvoice::class)->create();

        $response = $this->get(route('article-invoice.edit', $articleInvoice));

        $response->assertOk();
        $response->assertViewIs('articleInvoice.edit');
        $response->assertViewHas('articleInvoice');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleInvoiceController::class,
            'update',
            \App\Http\Requests\ArticleInvoiceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $articleInvoice = factory(ArticleInvoice::class)->create();
        $articleInvoice = $this->faker->word;

        $response = $this->put(route('article-invoice.update', $articleInvoice), [
            'articleInvoice' => $articleInvoice,
        ]);

        $response->assertRedirect(route('articleInvoice.index'));
        $response->assertSessionHas('articleInvoice.id', $articleInvoice->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $articleInvoice = factory(ArticleInvoice::class)->create();

        $response = $this->delete(route('article-invoice.destroy', $articleInvoice));

        $response->assertRedirect(route('articleInvoice.index'));

        $this->assertDeleted($articleInvoice);
    }
}
