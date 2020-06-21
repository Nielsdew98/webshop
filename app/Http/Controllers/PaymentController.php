<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Notifications\OrderReceived;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Notification;
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
        $arrayCart = array($cart);
        $count = count(Product::all());
        for($i=0;$i<($count+1);$i++){
            if (!empty($arrayCart[0]->products[$i]['product_id'])){
                $id = $arrayCart[0]->products[$i]['product_id'];
                $quantity = $arrayCart[0]->products[$i]['quantity'];
                $product = Product::where('id',$id)->first();
                $oldstock = $product->stock->stock;
                $newstock = $oldstock - $quantity;
                $product->stock->update(['stock' => $newstock]);
            }
        }
        foreach ($cart as $item){
            $i=0;
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

