<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetail;
use Exception;
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

    public function indexJson()
    {
        $cartProducts = DB::table('purchase_details')->where('user_id', auth()->id())->get();
        return response()->json($cartProducts);
    }

    public function addToCart(Request $request) {

        $product = DB::table('products')->where('id', $request->productId)->get()->first();

        $detail = new PurchaseDetail();

        $cartProduct = DB::table('purchase_details')->where(['user_id'=> auth()->id(), 'product_id' => $product->id])->first();
        
        if (DB::table('purchase_details')->where(['user_id'=> auth()->id(), 'product_id' => $product->id])->exists()) {
            $newQuantity = $cartProduct->quantity + $request->quantity;
            $newSubtotal = $newQuantity * $cartProduct->price;
            DB::table('purchase_details')->where(['user_id'=> auth()->id(), 'product_id' => $product->id])->limit(1)->update(['quantity' => $newQuantity, 'subtotal' => $newSubtotal]);
            // $cartProduct->quantity += $request->quantity;
            // DB::table('purchase_details')->where('id', $cartProduct->id)->update($cartProduct);
        } else {
            $detail = new PurchaseDetail();
            $detail->product_id = $product->id;
            $detail->image = $product->image;
            $detail->name = $product->name;
            $detail->user_id = auth()->id();
            $detail->price = $product->price;
            $detail->quantity = $request->quantity;
            $detail->subtotal = $product->price * $request->quantity;
            
            $detail->save();
    
        }
        
        $cartProducts = DB::table('purchase_details')->where('user_id', auth()->id())->get();
        // return view('purchaseDetail', compact('cartProducts'));
        return redirect()->route('shoppingCart')->with(compact('cartProducts'));
        
        
    }

    public function deleteFromCart(Request $request) {
        DB::table('purchase_details')->where('id', $request->id)->delete();
    }

    public function updateCart(Request $request) {
        dump($request->toArray());
        $res = DB::table('purchase_details')->upsert($request->toArray(), ['id']);
        return $res;
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
