<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests\EstadoStoreRequest;
use App\Http\Requests\EstadoUpdateRequest;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estados = Estado::all();

        return view('estado.index', compact('estados'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('estado.create');
    }

    /**
     * @param \App\Http\Requests\EstadoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoStoreRequest $request)
    {
        $estado = Estado::create($request->all());

        $request->session()->flash('estado.id', $estado->id);

        return redirect()->route('estado.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Estado $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Estado $estado)
    {
        return view('estado.show', compact('estado'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Estado $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Estado $estado)
    {
        return view('estado.edit', compact('estado'));
    }

    /**
     * @param \App\Http\Requests\EstadoUpdateRequest $request
     * @param \App\Estado $estado
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoUpdateRequest $request, Estado $estado)
    {
        $estado->update([]);

        $request->session()->flash('estado.id', $estado->id);

        return redirect()->route('estado.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Estado $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Estado $estado)
    {
        $estado->delete();

        return redirect()->route('estado.index');
    }
}
