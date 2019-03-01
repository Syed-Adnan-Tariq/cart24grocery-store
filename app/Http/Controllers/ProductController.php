<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Recipe;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use Session;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.productdetails.productdetail');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $request->validate([

            'search' => 'required|string'
        ]);
            $search = $request->input('search');

            $products = Product::where('title' ,'like' ,"%$search%")->get();
            $recipes = Recipe::where('title' ,'like' ,"%$search%")->get();

            if($products->isEmpty() && $recipes->isEmpty())
            {
                return back()->with('danger',"Nothing matched your query");
         }
            return view('frontend.search_results.search_results',['products' => $products ,'recipes' => $recipes]);
    }


    public function cart()
    {
        if (!Session::has('cart')){
            return view('frontend.cart.cart');
        }
        $cart = Session::get('cart');
//        dd($cart);
        return view('frontend.cart.cart',compact('cart'));
    }

    public function clearcart()
    {
        Session::flush();
        return back();
    }



    public function store(Request $request)
    {
        $cart = Session::get('cart');
//dd($cart);
//        if ($cart||$cart->getTotalPrice()==0)
        if ($cart == null)
        {
            return back();
        }

        elseif(Auth::user())
        {
            $order = Order::create([

                'Quantity' => $cart->gettotalQty(),
                'price' => $cart->getgrandTotal(),
                'user_id' => auth()->id(),
            ]);
            foreach($cart->getcontents() as $products)
            {
                $product = $products['product']->type;

                if ($product == 'product')
                {
                    $product = $products['product']->id;
                    $order = Order::find($order->id);
                    $order->products()->attach($product);
                }
                else
                    {
                        $recipe = $products['product']->id;
                        $order = Order::find($order->id);
                        $order->recipes()->attach($recipe);
                }


            }

                $order->save();
            Session::flush();
            return back()->with('message',"ThankYou For Shopping!");
        }
        else{
            return redirect('/login')->with('info',"please login first");
        }
    }


    public function removeProduct(Product $product)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeProduct($product);
        Session::put('cart', $cart);

        return back()->with('message', "Product $product->title has been successfully removed from the cart");

    }

    public function addtocart(Product $product, Request $request){

   $oldCart = Session::has('cart') ? Session::get('cart'): null;
   $qty = $request->qty ? $request->qty : 1;
   $cart = new Cart($oldCart);
   $cart->addProduct($product ,$qty);
    Session::put('cart', $cart);
    return back()->with('message',"product $product->title Add to Cart successfully ");
    }

    public function updateProduct(Product $product, Request $request)
    {
//        dd($product);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateProduct($product, $request->qty);

        Session::put('cart', $cart);

        return back()->with('message', "Product $product->title has been successfully updated in the cart");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product=Product::find($product->id);
//        dd($product);
        return view('frontend.productdetails.productdetail',['product' => $product]);

    }


}
