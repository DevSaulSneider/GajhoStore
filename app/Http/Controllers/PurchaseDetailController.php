<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartProducts = DB::table('purchase_details')->where('user_id', auth()->id())->get();
        return view('purchaseDetail', compact('cartProducts'));
    }

    public function addToCart(Request $request) {
        $product = DB::table('products')->where('id', $request->productId)->get()->first();

        $detail = new PurchaseDetail();
        $detail->product_id = $product->id;
        $detail->image = $product->image;
        $detail->name = $product->name;
        $detail->user_id = auth()->id();
        $detail->price = $product->price;
        $detail->quantity = $request->quantity;
        $detail->subtotal = $product->price * $request->quantity;

        $detail->save();

        $cartProducts = DB::table('purchase_details')->where('user_id', auth()->id())->get();
        return view('purchaseDetail', compact('cartProducts'));
    }

    public function deleteFromCart(Request $request) {
        DB::table('purchase_details')->where('id', $request->id)->delete();
        $cartProducts = DB::table('purchase_details')->where('user_id', auth()->id())->get();
        return redirect()->route('shoppingCart', ['cartProducts' => compact('cartProducts')]);
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
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseDetail $purchaseDetail)
    {
        //
    }
}
