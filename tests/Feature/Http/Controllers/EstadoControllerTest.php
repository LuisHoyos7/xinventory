<?php

namespace Tests\Feature\Http\Controllers;

use App\Estado;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EstadoController
 */
class EstadoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $estados = factory(Estado::class, 3)->create();

        $response = $this->get(route('estado.index'));

        $response->assertOk();
        $response->assertViewIs('estado.index');
        $response->assertViewHas('estados');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('estado.create'));

        $response->assertOk();
        $response->assertViewIs('estado.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstadoController::class,
            'store',
            \App\Http\Requests\EstadoStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $estado = $this->faker->word;

        $response = $this->post(route('estado.store'), [
            'estado' => $estado,
        ]);

        $estados = Estado::query()
            ->where('estado', $estado)
            ->get();
        $this->assertCount(1, $estados);
        $estado = $estados->first();

        $response->assertRedirect(route('estado.index'));
        $response->assertSessionHas('estado.id', $estado->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $estado = factory(Estado::class)->create();

        $response = $this->get(route('estado.show', $estado));

        $response->assertOk();
        $response->assertViewIs('estado.show');
        $response->assertViewHas('estado');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $estado = factory(Estado::class)->create();

        $response = $this->get(route('estado.edit', $estado));

        $response->assertOk();
        $response->assertViewIs('estado.edit');
        $response->assertViewHas('estado');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstadoController::class,
            'update',
            \App\Http\Requests\EstadoUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $estado = factory(Estado::class)->create();
        $estado = $this->faker->word;

        $response = $this->put(route('estado.update', $estado), [
            'estado' => $estado,
        ]);

        $response->assertRedirect(route('estado.index'));
        $response->assertSessionHas('estado.id', $estado->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $estado = factory(Estado::class)->create();

        $response = $this->delete(route('estado.destroy', $estado));

        $response->assertRedirect(route('estado.index'));

        $this->assertDeleted($estado);
    }
}
