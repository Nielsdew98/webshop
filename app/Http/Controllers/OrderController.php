<?php

namespace App\Http\Controllers;

use App\Adress;
use App\Guest;
use App\Notifications\OrderReceived;
use App\Order;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Array_;
use function GuzzleHttp\Psr7\str;


class OrderController extends Controller
{
    //
    public function createOrder(Request $request){
        $deliveryprice = 0;
        switch($request->deliver_method){
            case $request->deliver_method =='postpunt':
                $deliveryprice = 3;
            case $request->deliver_method =='huis':
                $deliveryprice = 4;
        };
        $price = Session::get('cart')->totalprice;
        $total_price = $deliveryprice + $price;
        $user = User::where('email',$request->email)->get();
        if (count($user)>0){
            $user = User::where('email',$request->email)->first();
            $adress = Adress::where('user_id',Auth::id())->first();
            if($adress){
                $adress->user_id = $user->id;
                $adress->street = $request->adress;
                $adress->city = $request->city;
                $adress->postal_code = $request->zip;
                $adress->save();
            }
            if ($request->saveadress == 'bewaar'){
                $adress = new Adress();
                $adress->user_id = $user->id;
                $adress->street = $request->adress;
                $adress->city = $request->city;
                $adress->postal_code = $request->zip;
                $adress->save();
            }
            $order = new Order();
            $order->user_id = $user->id;
            $order->total_price = $total_price ;
            $order->delivery_method = $request->deliver_method;
            $order->payment_status = 'in behandeling';
            $order->save();
            $order->products()->sync($request->products, false);
        }else{
            $guest = new Guest();
            $guest->first_name = $request->first_name;
            $guest->last_name = $request->last_name;
            $guest->email = $request->email;
            $guest->phone = $request->phone;
            $guest->street_number = $request->adress;
            $guest->zip = $request->zip;
            $guest->city = $request->city;
            $guest->country = $request->country;
            $guest->save();
            $order = new Order();
            $order->guest_id = $guest->id;
            $order->total_price = $total_price;
            $order->delivery_method = $request->deliver_method;
            $order->payment_status = 'in behandeling';
            $order->save();
            $order->products()->sync($request->products, false);
        }

       return redirect()->route('payment.mollie', ['id' => $order->id]);

    }
    public function index(){
        $orders = Order::paginate(8);
        return view('admin.orders.index',compact('orders'));
    }
}
