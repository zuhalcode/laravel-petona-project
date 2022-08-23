<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart', [
            'carts' => Cart::all(),
            'total' => 0,
        ]);
    }

    public function updateProductUp($id)
    {
        $cart = Cart::where('product_id', $id)->first();
        $cart->quantity += 1;
        $cart->save();
        return redirect('/cart');
    }

    public function updateProductDown($id)
    {
        $cart = Cart::where('product_id', $id)->first();
        $cart->quantity -= 1;
        $cart->save();
        return redirect('/cart');
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
    public function store($id)
    {
        $product = Product::where('id', $id)->first();

        $productCartExist = Cart::where('user_id', auth()->user()->id)->where('product_id', $id)->first();
        
        $currentOrder = Order::where('user_id', auth()->user()->id)->where('status_id', 2)->first();

        if($currentOrder && $productCartExist) {
            $productCartExist->order_id = $currentOrder->id;
            $productCartExist->quantity += 1;
            $productCartExist->update();

        } elseif(!$currentOrder && $productCartExist) {
            $newOrder = new Order;
            $newOrder->user_id = auth()->user()->id;
            $newOrder->total_price = 0;
            $newOrder->save();

            $productCartExist->order_id = $newOrder->id;

        }elseif(!$currentOrder && empty($productCartExist)) {
            $newOrder = new Order;
            $newOrder->user_id = auth()->user()->id;
            $newOrder->total_price = 0;
            $newOrder->save();

            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->order_id = $newOrder->id;
            $cart->quantity = 1;
            $cart->save();

        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->order_id = $currentOrder->id;
            $cart->quantity = 1;
            $cart->save();
        }

        return redirect('/products');
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
        $cart = Cart::where('id', $id)->first();
        $cart->delete();
        return redirect('/cart');
    }
}
