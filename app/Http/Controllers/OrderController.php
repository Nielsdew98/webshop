<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function createOrder(Request $request){
        $order = new Order();
        $order->user_id = $request->factuurnaam;
        $order->total_price = $request->prijs;
        $order->delivery_method = $request->levermethode;
        $order->payment_status = 'in behandeling';
        $order->save();
        $order->products()->sync($request->products, false);

       return redirect()->route('payment.mollie', ['id' => $order->id]);
    }

}
