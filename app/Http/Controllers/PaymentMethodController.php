<?php

namespace App\Http\Controllers;

use App\Models\Turn;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request, PaymentMethod $paymentMethod)
    {
        $this->authorize('payment', $paymentMethod);
        $filtrarNombre = $request->get('filtrarNombre');
        $paymentMethods = DB::table('payment_methods')->where('name', 'LIKE', '%'.$filtrarNombre.'%')->paginate(5);
        return view('payment-method.index', compact('paymentMethods'));   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PaymentMethod $paymentMethod)
    {
        $this->authorize('payment', $paymentMethod);
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
        $payment = new PaymentMethod();
        $this->authorize('payment', $payment);
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

    public function consultarMetodoPagoPorID(Request $request){
        $consultaID = $request->get('consultaID');
        $paymentMethods = DB::table('payment_methods')->where('id', '=', $consultaID)->paginate();
        return view('payment-method.index', compact('paymentMethods','consultaID'));
    }
}
