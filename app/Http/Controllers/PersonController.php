<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Http\Requests\PersonUpdateRequest;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $people = Person::all();

        return view('person.index', compact('people'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('person.create');
    }

    /**
     * @param \App\Http\Requests\PersonStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonStoreRequest $request)
    {
        $person = Person::create($request->all());

        $request->session()->flash('person.id', $person->id);

        return redirect()->route('person.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Person $person
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Person $person)
    {
        return view('person.show', compact('person'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Person $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Person $person)
    {
        return view('person.edit', compact('person'));
    }

    /**
     * @param \App\Http\Requests\PersonUpdateRequest $request
     * @param \App\Person $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonUpdateRequest $request, Person $person)
    {
        $person->update([]);

        $request->session()->flash('person.id', $person->id);

        return redirect()->route('person.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Person $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Person $person)
    {
        $person->delete();

        return redirect()->route('person.index');
    }
}
