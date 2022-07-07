<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function toBuy(Request $request)
    {
        $cartItems = DB::table('purchase_details')
            ->where([['user_id', '=', auth()->id()], ['purchase_id', '=', null]]);

        $total = $cartItems->sum('subtotal');

        $purchase = new Purchase();

        $purchase->user_id = auth()->id();
        $purchase->payment_method_id = 1;
        $purchase->total = $total;
        $purchase->payment_date = now();

        $purchase->save();

        $cartItems->get()->each(function ($item) {
            $prod = DB::table('products')->where('id', $item->product_id);
            $sold = $prod->first()->sold + $item->quantity;
            $status = ($prod->first()->quantity - $item->quantity > 0) ? "Publicado" : "Vendido";
            DB::table('products')->where('id', $item->product_id)->update(["sold" => $sold, "status" => $status]);
        });

        DB::table('purchase_details')
            ->where([['user_id', '=', auth()->id()], ['purchase_id', '=', null]])
            ->update(['purchase_id' => $purchase->id]);

        return view('purchaseFinished');
    }
}
