<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeasureUnitStoreRequest;
use App\Http\Requests\MeasureUnitUpdateRequest;
use App\MeasureUnit;
use Illuminate\Http\Request;

class MeasureUnitController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $measureUnits = MeasureUnit::all();

        return view('measureUnit.index', compact('measureUnits'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('measureUnit.create');
    }

    /**
     * @param \App\Http\Requests\MeasureUnitStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeasureUnitStoreRequest $request)
    {
        $measureUnit = MeasureUnit::create($request->all());

        $request->session()->flash('measureUnit.id', $measureUnit->id);

        return redirect()->route('measure-unit.index')
            ->with('success' , 'Registro Agregado Con Exito');;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\MeasureUnit $measureUnit
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, MeasureUnit $measureUnit)
    {
        return view('measureUnit.show', compact('measureUnit'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\MeasureUnit $measureUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, MeasureUnit $measureUnit)
    {
        return view('measureUnit.edit', compact('measureUnit'));
    }

    /**
     * @param \App\Http\Requests\MeasureUnitUpdateRequest $request
     * @param \App\MeasureUnit $measureUnit
     * @return \Illuminate\Http\Response
     */
    public function update(MeasureUnitUpdateRequest $request, MeasureUnit $measureUnit)
    {
        $measureUnit->update(['name' => $request->name]);

        $request->session()->flash('measureUnit.id', $measureUnit->id);

        return redirect()->route('measure-unit.index')
            ->with('info' , 'Registro Actualizado Con Exito');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\MeasureUnit $measureUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MeasureUnit $measureUnit)
    {
        $measureUnit->delete();

        return redirect()->route('measure-unit.index')
            ->with('error' , 'Registro Eliminado Con Exito');;
    }
}
