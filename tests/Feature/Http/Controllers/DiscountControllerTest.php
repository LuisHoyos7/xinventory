<?php

namespace Tests\Feature\Http\Controllers;

use App\Discount;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DiscountController
 */
class DiscountControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $discounts = factory(Discount::class, 3)->create();

        $response = $this->get(route('discount.index'));

        $response->assertOk();
        $response->assertViewIs('discount.index');
        $response->assertViewHas('discounts');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('discount.create'));

        $response->assertOk();
        $response->assertViewIs('discount.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DiscountController::class,
            'store',
            \App\Http\Requests\DiscountStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $discount = $this->faker->word;

        $response = $this->post(route('discount.store'), [
            'discount' => $discount,
        ]);

        $discounts = Discount::query()
            ->where('discount', $discount)
            ->get();
        $this->assertCount(1, $discounts);
        $discount = $discounts->first();

        $response->assertRedirect(route('discount.index'));
        $response->assertSessionHas('discount.id', $discount->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $discount = factory(Discount::class)->create();

        $response = $this->get(route('discount.show', $discount));

        $response->assertOk();
        $response->assertViewIs('discount.show');
        $response->assertViewHas('discount');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $discount = factory(Discount::class)->create();

        $response = $this->get(route('discount.edit', $discount));

        $response->assertOk();
        $response->assertViewIs('discount.edit');
        $response->assertViewHas('discount');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DiscountController::class,
            'update',
            \App\Http\Requests\DiscountUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $discount = factory(Discount::class)->create();
        $discount = $this->faker->word;

        $response = $this->put(route('discount.update', $discount), [
            'discount' => $discount,
        ]);

        $response->assertRedirect(route('discount.index'));
        $response->assertSessionHas('discount.id', $discount->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $discount = factory(Discount::class)->create();

        $response = $this->delete(route('discount.destroy', $discount));

        $response->assertRedirect(route('discount.index'));

        $this->assertDeleted($discount);
    }
}
