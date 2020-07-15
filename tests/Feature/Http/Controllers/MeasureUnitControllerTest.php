<?php

namespace Tests\Feature\Http\Controllers;

use App\MeasureUnit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\MeasureUnitController
 */
class MeasureUnitControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $measureUnits = factory(MeasureUnit::class, 3)->create();

        $response = $this->get(route('measure-unit.index'));

        $response->assertOk();
        $response->assertViewIs('measureUnit.index');
        $response->assertViewHas('measureUnits');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('measure-unit.create'));

        $response->assertOk();
        $response->assertViewIs('measureUnit.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MeasureUnitController::class,
            'store',
            \App\Http\Requests\MeasureUnitStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $measureUnit = $this->faker->word;

        $response = $this->post(route('measure-unit.store'), [
            'measureUnit' => $measureUnit,
        ]);

        $measureUnits = MeasureUnit::query()
            ->where('measureUnit', $measureUnit)
            ->get();
        $this->assertCount(1, $measureUnits);
        $measureUnit = $measureUnits->first();

        $response->assertRedirect(route('measureUnit.index'));
        $response->assertSessionHas('measureUnit.id', $measureUnit->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $measureUnit = factory(MeasureUnit::class)->create();

        $response = $this->get(route('measure-unit.show', $measureUnit));

        $response->assertOk();
        $response->assertViewIs('measureUnit.show');
        $response->assertViewHas('measureUnit');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $measureUnit = factory(MeasureUnit::class)->create();

        $response = $this->get(route('measure-unit.edit', $measureUnit));

        $response->assertOk();
        $response->assertViewIs('measureUnit.edit');
        $response->assertViewHas('measureUnit');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MeasureUnitController::class,
            'update',
            \App\Http\Requests\MeasureUnitUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $measureUnit = factory(MeasureUnit::class)->create();
        $measureUnit = $this->faker->word;

        $response = $this->put(route('measure-unit.update', $measureUnit), [
            'measureUnit' => $measureUnit,
        ]);

        $response->assertRedirect(route('measureUnit.index'));
        $response->assertSessionHas('measureUnit.id', $measureUnit->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $measureUnit = factory(MeasureUnit::class)->create();

        $response = $this->delete(route('measure-unit.destroy', $measureUnit));

        $response->assertRedirect(route('measureUnit.index'));

        $this->assertDeleted($measureUnit);
    }
}
