<?php

namespace Tests\Feature\Http\Controllers;

use App\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PersonController
 */
class PersonControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $people = factory(Person::class, 3)->create();

        $response = $this->get(route('person.index'));

        $response->assertOk();
        $response->assertViewIs('person.index');
        $response->assertViewHas('people');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('person.create'));

        $response->assertOk();
        $response->assertViewIs('person.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonController::class,
            'store',
            \App\Http\Requests\PersonStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $person = $this->faker->word;

        $response = $this->post(route('person.store'), [
            'person' => $person,
        ]);

        $people = Person::query()
            ->where('person', $person)
            ->get();
        $this->assertCount(1, $people);
        $person = $people->first();

        $response->assertRedirect(route('person.index'));
        $response->assertSessionHas('person.id', $person->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $person = factory(Person::class)->create();

        $response = $this->get(route('person.show', $person));

        $response->assertOk();
        $response->assertViewIs('person.show');
        $response->assertViewHas('person');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $person = factory(Person::class)->create();

        $response = $this->get(route('person.edit', $person));

        $response->assertOk();
        $response->assertViewIs('person.edit');
        $response->assertViewHas('person');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonController::class,
            'update',
            \App\Http\Requests\PersonUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $person = factory(Person::class)->create();
        $person = $this->faker->word;

        $response = $this->put(route('person.update', $person), [
            'person' => $person,
        ]);

        $response->assertRedirect(route('person.index'));
        $response->assertSessionHas('person.id', $person->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $person = factory(Person::class)->create();

        $response = $this->delete(route('person.destroy', $person));

        $response->assertRedirect(route('person.index'));

        $this->assertDeleted($person);
    }
}
