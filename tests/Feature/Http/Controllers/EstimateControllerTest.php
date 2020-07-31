<?php

namespace Tests\Feature\Http\Controllers;

use App\Estado;
use App\Estimate;
use App\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EstimateController
 */
class EstimateControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $estimates = factory(Estimate::class, 3)->create();

        $response = $this->get(route('estimate.index'));

        $response->assertOk();
        $response->assertViewIs('estimate.index');
        $response->assertViewHas('estimates');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('estimate.create'));

        $response->assertOk();
        $response->assertViewIs('estimate.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstimateController::class,
            'store',
            \App\Http\Requests\EstimateStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $number_estimate = $this->faker->numberBetween(-10000, 10000);
        $person = factory(Person::class)->create();
        $estado = factory(Estado::class)->create();
        $date = $this->faker->date();

        $response = $this->post(route('estimate.store'), [
            'number_estimate' => $number_estimate,
            'person_id' => $person->id,
            'estado_id' => $estado->id,
            'date' => $date,
        ]);

        $estimates = Estimate::query()
            ->where('number_estimate', $number_estimate)
            ->where('person_id', $person->id)
            ->where('estado_id', $estado->id)
            ->where('date', $date)
            ->get();
        $this->assertCount(1, $estimates);
        $estimate = $estimates->first();

        $response->assertRedirect(route('estimate.index'));
        $response->assertSessionHas('estimate.id', $estimate->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $estimate = factory(Estimate::class)->create();

        $response = $this->get(route('estimate.show', $estimate));

        $response->assertOk();
        $response->assertViewIs('estimate.show');
        $response->assertViewHas('estimate');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $estimate = factory(Estimate::class)->create();

        $response = $this->get(route('estimate.edit', $estimate));

        $response->assertOk();
        $response->assertViewIs('estimate.edit');
        $response->assertViewHas('estimate');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstimateController::class,
            'update',
            \App\Http\Requests\EstimateUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $estimate = factory(Estimate::class)->create();
        $number_estimate = $this->faker->numberBetween(-10000, 10000);
        $person = factory(Person::class)->create();
        $estado = factory(Estado::class)->create();
        $date = $this->faker->date();

        $response = $this->put(route('estimate.update', $estimate), [
            'number_estimate' => $number_estimate,
            'person_id' => $person->id,
            'estado_id' => $estado->id,
            'date' => $date,
        ]);

        $estimate->refresh();

        $response->assertRedirect(route('estimate.index'));
        $response->assertSessionHas('estimate.id', $estimate->id);

        $this->assertEquals($number_estimate, $estimate->number_estimate);
        $this->assertEquals($person->id, $estimate->person_id);
        $this->assertEquals($estado->id, $estimate->estado_id);
        $this->assertEquals($date, $estimate->date);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $estimate = factory(Estimate::class)->create();

        $response = $this->delete(route('estimate.destroy', $estimate));

        $response->assertRedirect(route('estimate.index'));

        $this->assertDeleted($estimate);
    }
}
