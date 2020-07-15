<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\ColorStoreRequest;
use App\Http\Requests\ColorUpdateRequest;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $colors = Color::all();

        return view('color.index', compact('colors'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('color.create');
    }

    /**
     * @param \App\Http\Requests\ColorStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorStoreRequest $request)
    {
        $color = Color::create($request->all());

        $request->session()->flash('color.id', $color->id);

        return redirect()->route('color.index')
            ->with('success', 'registro creado con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Color $color
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Color $color)
    {
        return view('color.show', compact('color'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Color $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Color $color)
    {
        return view('color.edit', compact('color'));
    }

    /**
     * @param \App\Http\Requests\ColorUpdateRequest $request
     * @param \App\Color $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorUpdateRequest $request, Color $color)
    {
      
        $color->update(['code' => $request->code, 'name' => $request->name]);

        $request->session()->flash('color.id', $color->id);

        return redirect()->route('color.index')
            ->with('info ', 'Registro Actualizado con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Color $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Color $color)
    {
        $color->delete();

        return redirect()->route('color.index')
            ->with('error', 'Registro Eliminado con Exito');
    }
}
