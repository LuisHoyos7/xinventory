<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentTypeStoreRequest;
use App\Http\Requests\PaymentTypeUpdateRequest;
use App\PaymentType;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paymentTypes = PaymentType::all();

        return view('paymentType.index', compact('paymentTypes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('paymentType.create');
    }

    /**
     * @param \App\Http\Requests\PaymentTypeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentTypeStoreRequest $request)
    {
        $paymentType = PaymentType::create($request->all());

        $request->session()->flash('paymentType.id', $paymentType->id);

        return redirect()->route('paymentType.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\PaymentType $paymentType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PaymentType $paymentType)
    {
        return view('paymentType.show', compact('paymentType'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\PaymentType $paymentType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PaymentType $paymentType)
    {
        return view('paymentType.edit', compact('paymentType'));
    }

    /**
     * @param \App\Http\Requests\PaymentTypeUpdateRequest $request
     * @param \App\PaymentType $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentTypeUpdateRequest $request, PaymentType $paymentType)
    {
        $paymentType->update([]);

        $request->session()->flash('paymentType.id', $paymentType->id);

        return redirect()->route('paymentType.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\PaymentType $paymentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PaymentType $paymentType)
    {
        $paymentType->delete();

        return redirect()->route('paymentType.index');
    }
}
