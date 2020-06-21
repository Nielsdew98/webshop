<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Notifications\OrderReceived;
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
            "redirectUrl" => route('payment.success',['id' => $order->id]),
            "metadata" => [
                "order_id" => $order->id,
            ],
        ]);

        $notification = new OrderReceived($order);

        //Notify Admins
        $admin = new User();

        Notification::send($admin->areAdmins(), $notification);
        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * After the customer has completed the transaction,
     * you can fetch, check and process the payment.
     * (See the webhook docs for more information.)
     */
    public function paymentSuccess($id) {
        $order = Order::findOrFail($id);
        $order->payment_status = 'paid';
        $order->save();
        $cart = Session::get('cart');

      for ($i=0;$i<count(array($cart));$i++){
          $arrayCart = array($cart);

          if ($arrayCart[$i]->products[$i+1]['product_id'] = $order->products[$i]->id){
                  $quantity = $arrayCart[$i]->products[$i+1]['quantity'];
                  $oldstock = $order->products[$i]->stock->stock;
                  $newstock = $oldstock - $quantity;
                  $order->products[$i]->stock->update(['stock' => $newstock]);
          }
          $item = Session::forget('cart', $i);
          $i++;
      }


        return view('front.paymentsucces',compact('order'));

    }
    public function paymentFailed($id) {
        $order = Order::findOrFail($id);
        $order->payment_status = 'failed';
        $order->save();

        return view('front.paymentfailed',compact('order'));
    }
}

