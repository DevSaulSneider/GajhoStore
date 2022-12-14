<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Purchase;
use App\Models\PurchaseDetail;


class UserController extends Controller
{
    public function myprofile()
    {
        $userData = DB::table('users')->find(auth()->id());
        return view('myProfile', compact('userData'));
    }

    public function updateProfile(Request $request)
    {
        // dd($request);
        $updateUser =  request()->except(['_token', '_method', 'province', 'department']);
        // $updateUser = DB::table('users')->find(auth()->id());
        // $updateUser->address = $request->address;
        // $updateUser->reference = $request->reference;
        // $updateUser->phone = $request->phone;
        // $updateUser->name = $request->name;
        // $updateUser->district_id = $request->district_id;

        DB::table('users')->where('id', auth()->id())->update($updateUser);

        $userData = DB::table('users')->find(auth()->id());
        return view('myProfile', compact('userData'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function misCompras()
    {
        $userID = auth()->id();
        // $compras = DB::table('purchases')->where('user_id', '=', $userID);
        $detalleCompra = DB::table('purchase_details')
            ->join('products', 'purchase_details.product_id', 'products.id')
            ->select('purchase_details.*', 'purchase_details.quantity as quantity_product', 'products.id as id_product')
            ->where('purchase_details.purchase_id', '!=', null)
            ->where('purchase_details.user_id', '=', $userID)->get();

        $misCompras = auth()->user();
        // return response()->json($detalleCompra);
        return view('misCompras', compact('detalleCompra'));
    }
}
