<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use App\Models\Turn;

/**
 * Class PaymentMethodController
 * @package App\Http\Controllers
 */
class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        $paymentMethods['paymentMethods'] = PaymentMethod::paginate(5);
        return view('payment-method.index', $paymentMethods)->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentMethod = new PaymentMethod();
        $turns = Turn::pluck('turn', 'id');

        return view('payment-method.create', compact('paymentMethod', 'turns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated = [
            'name'=>'required|alpha|max:30|min:3',
        ];
        $message = [
            'name.required'=>'El nombre es obligatorio',
            'name.alpha'=>'El nombre solo puede contener letras',
            'name.max'=>'Limite de caracteres alcanzado',
            'name.min'=>'El campo debe tener al menos 10 caracteres'

        ];

        $this->validate($request, $validated, $message);
        $paymentMethod = PaymentMethod::create($request->all());
        return redirect()->route('payment-methods.index')
            ->with('success', 'Metodoo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        return view('payment-method.show', compact('paymentMethod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        return view('payment-method.edit', compact('paymentMethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PaymentMethod $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        request()->validate(PaymentMethod::$rules);

        $paymentMethod->update($request->all());

        return redirect()->route('payment-methods.index')
            ->with('success', 'Metodoo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::find($id)->delete();

        return redirect()->route('payment-methods.index')
            ->with('success', 'Metodoo borrado correctamente');
    }
}
