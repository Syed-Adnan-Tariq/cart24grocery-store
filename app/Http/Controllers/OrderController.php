<?php

namespace App\Http\Controllers;

use App\Order;
use App\Recipe;
use Auth;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderdetail(Order $order)
    {

        $order = Order::find($order->id);

//        foreach ($order->products as $product)
//        {
//            dd($product);
//        }
       return view('frontend.order_history.orderdetail',compact('order'));
    }

    public function order_history()
    {
        $user = Auth::user()->id;
        $orders =  Order::where('user_id','=',$user)->get();
        return view('frontend.order_history.order_history',compact('orders'));
    }

    public function reorder(Order $order, Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $qty = $request->qty ? $request->qty : 1;
        $cart = new Cart($oldCart);
        $order = Order::find($order->id);

        $products = $order->products;
        $recipes = $order->recipes;

        foreach($products as $product){
        $cart->addProduct($product,$qty);
        }
        foreach($recipes as $recipe){
            $cart->addProduct($recipe,$qty);
        }
        Session::put('cart', $cart);



//        dd($order->recipes);
//      return view('frontend.cart.cart',compact('cart'));
        return back()->with('message', "Previously ordered products added to cart successfully!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function recipedetailview(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);
        return view('frontend.recipedetails.recipedetailview',compact('recipe'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


}
