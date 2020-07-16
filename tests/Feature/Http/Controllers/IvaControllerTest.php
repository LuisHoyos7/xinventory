<?php

namespace Tests\Feature\Http\Controllers;

use App\Iva;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\IvaController
 */
class IvaControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $ivas = factory(Iva::class, 3)->create();

        $response = $this->get(route('iva.index'));

        $response->assertOk();
        $response->assertViewIs('iva.index');
        $response->assertViewHas('ivas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('iva.create'));

        $response->assertOk();
        $response->assertViewIs('iva.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\IvaController::class,
            'store',
            \App\Http\Requests\IvaStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $iva = $this->faker->word;

        $response = $this->post(route('iva.store'), [
            'iva' => $iva,
        ]);

        $ivas = Iva::query()
            ->where('iva', $iva)
            ->get();
        $this->assertCount(1, $ivas);
        $iva = $ivas->first();

        $response->assertRedirect(route('iva.index'));
        $response->assertSessionHas('iva.id', $iva->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $iva = factory(Iva::class)->create();

        $response = $this->get(route('iva.show', $iva));

        $response->assertOk();
        $response->assertViewIs('iva.show');
        $response->assertViewHas('iva');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $iva = factory(Iva::class)->create();

        $response = $this->get(route('iva.edit', $iva));

        $response->assertOk();
        $response->assertViewIs('iva.edit');
        $response->assertViewHas('iva');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\IvaController::class,
            'update',
            \App\Http\Requests\IvaUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $iva = factory(Iva::class)->create();
        $iva = $this->faker->word;

        $response = $this->put(route('iva.update', $iva), [
            'iva' => $iva,
        ]);

        $response->assertRedirect(route('iva.index'));
        $response->assertSessionHas('iva.id', $iva->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $iva = factory(Iva::class)->create();

        $response = $this->delete(route('iva.destroy', $iva));

        $response->assertRedirect(route('iva.index'));

        $this->assertDeleted($iva);
    }
}
