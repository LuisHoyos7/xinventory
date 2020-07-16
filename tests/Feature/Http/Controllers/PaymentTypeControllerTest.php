<?php

namespace Tests\Feature\Http\Controllers;

use App\PaymentType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PaymentTypeController
 */
class PaymentTypeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $paymentTypes = factory(PaymentType::class, 3)->create();

        $response = $this->get(route('payment-type.index'));

        $response->assertOk();
        $response->assertViewIs('paymentType.index');
        $response->assertViewHas('paymentTypes');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('payment-type.create'));

        $response->assertOk();
        $response->assertViewIs('paymentType.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PaymentTypeController::class,
            'store',
            \App\Http\Requests\PaymentTypeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $paymentType = $this->faker->word;

        $response = $this->post(route('payment-type.store'), [
            'paymentType' => $paymentType,
        ]);

        $paymentTypes = PaymentType::query()
            ->where('paymentType', $paymentType)
            ->get();
        $this->assertCount(1, $paymentTypes);
        $paymentType = $paymentTypes->first();

        $response->assertRedirect(route('paymentType.index'));
        $response->assertSessionHas('paymentType.id', $paymentType->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $paymentType = factory(PaymentType::class)->create();

        $response = $this->get(route('payment-type.show', $paymentType));

        $response->assertOk();
        $response->assertViewIs('paymentType.show');
        $response->assertViewHas('paymentType');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $paymentType = factory(PaymentType::class)->create();

        $response = $this->get(route('payment-type.edit', $paymentType));

        $response->assertOk();
        $response->assertViewIs('paymentType.edit');
        $response->assertViewHas('paymentType');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PaymentTypeController::class,
            'update',
            \App\Http\Requests\PaymentTypeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $paymentType = factory(PaymentType::class)->create();
        $paymentType = $this->faker->word;

        $response = $this->put(route('payment-type.update', $paymentType), [
            'paymentType' => $paymentType,
        ]);

        $response->assertRedirect(route('paymentType.index'));
        $response->assertSessionHas('paymentType.id', $paymentType->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $paymentType = factory(PaymentType::class)->create();

        $response = $this->delete(route('payment-type.destroy', $paymentType));

        $response->assertRedirect(route('paymentType.index'));

        $this->assertDeleted($paymentType);
    }
}
