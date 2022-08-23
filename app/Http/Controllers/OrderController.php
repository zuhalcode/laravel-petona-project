<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-H9-IadFzqiqsYUKTIwte2UoK';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        
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
    public function store(Request $req)
    {
        $cart = Cart::where('user_id', auth()->id())->get();

        // get product in cart based on product_id even there are no relation with cart_id in the product table
        $cartProduct = Product::whereIn('id', $cart->pluck('product_id'))->get();
        
        $total = 0;

        foreach($cartProduct as $product) {
            $total += $product->price * $cart->where('product_id', $product->id)->first()->quantity;
        }

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => $req['first-name'],
                'last_name' => $req['last-name'],
                'email' => $req['email'],
                'phone' => $req['phone'],
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->total_price = $params['transaction_details']['gross_amount'];
        $order->save();

        // delete current cart
        Cart::where('user_id', auth()->user()->id)->delete();
        
        return view('payment', ['snap_token' => $snapToken]);
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
        dd('zuhal ganteng ygy');
    }
}
