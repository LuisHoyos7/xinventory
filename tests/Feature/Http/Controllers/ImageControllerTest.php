<?php

namespace Tests\Feature\Http\Controllers;

use App\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ImageController
 */
class ImageControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $images = factory(Image::class, 3)->create();

        $response = $this->get(route('image.index'));

        $response->assertOk();
        $response->assertViewIs('image.index');
        $response->assertViewHas('images');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('image.create'));

        $response->assertOk();
        $response->assertViewIs('image.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ImageController::class,
            'store',
            \App\Http\Requests\ImageStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('image.store'), [
            'name' => $name,
        ]);

        $images = Image::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $images);
        $image = $images->first();

        $response->assertRedirect(route('image.index'));
        $response->assertSessionHas('image.id', $image->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $image = factory(Image::class)->create();

        $response = $this->get(route('image.show', $image));

        $response->assertOk();
        $response->assertViewIs('image.show');
        $response->assertViewHas('image');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $image = factory(Image::class)->create();

        $response = $this->get(route('image.edit', $image));

        $response->assertOk();
        $response->assertViewIs('image.edit');
        $response->assertViewHas('image');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ImageController::class,
            'update',
            \App\Http\Requests\ImageUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $image = factory(Image::class)->create();
        $name = $this->faker->name;

        $response = $this->put(route('image.update', $image), [
            'name' => $name,
        ]);

        $image->refresh();

        $response->assertRedirect(route('image.index'));
        $response->assertSessionHas('image.id', $image->id);

        $this->assertEquals($name, $image->name);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $image = factory(Image::class)->create();

        $response = $this->delete(route('image.destroy', $image));

        $response->assertRedirect(route('image.index'));

        $this->assertDeleted($image);
    }
}
