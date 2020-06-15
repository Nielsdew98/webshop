<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mollie\Laravel\Facades\Mollie;
use function GuzzleHttp\Psr7\str;

class PaymentController extends Controller
{
    //
    public function preparePayment($id)
    {
        $order = Order::findOrFail($id);
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $order->total_price, // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Order " .$order->id,
            "redirectUrl" => route('payment.success'),
            "metadata" => [
                "order_id" => $order->id,
            ],
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * After the customer has completed the transaction,
     * you can fetch, check and process the payment.
     * (See the webhook docs for more information.)
     */
    public function paymentSuccess() {
        
        $cart = Session::get('cart');
        foreach ($cart as $item){
            $i = 0;
            $item = Session::forget('cart', $i);
            $i++;
        }
        return view('front.paymentsucces');

    }
}

