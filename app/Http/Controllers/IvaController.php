<?php

namespace App\Http\Controllers;

use App\Http\Requests\IvaStoreRequest;
use App\Http\Requests\IvaUpdateRequest;
use App\Iva;
use Illuminate\Http\Request;

class IvaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ivas = Iva::all();

        return view('iva.index', compact('ivas'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('iva.create');
    }

    /**
     * @param \App\Http\Requests\IvaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IvaStoreRequest $request)
    {
        $iva = Iva::create($request->all());

        $request->session()->flash('iva.id', $iva->id);

        return redirect()->route('iva.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Iva $iva
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Iva $iva)
    {
        return view('iva.show', compact('iva'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Iva $iva
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Iva $iva)
    {
        return view('iva.edit', compact('iva'));
    }

    /**
     * @param \App\Http\Requests\IvaUpdateRequest $request
     * @param \App\Iva $iva
     * @return \Illuminate\Http\Response
     */
    public function update(IvaUpdateRequest $request, Iva $iva)
    {
        $iva->update([]);

        $request->session()->flash('iva.id', $iva->id);

        return redirect()->route('iva.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Iva $iva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Iva $iva)
    {
        $iva->delete();

        return redirect()->route('iva.index');
    }
}
