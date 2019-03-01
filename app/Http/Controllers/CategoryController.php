<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Recipe;
use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipe =[1];
        $order   = Order::find(1);
        $order->recipes()->sync($recipe);

        $recipe =[5];
        $order   = Order::find(2);
        $order->recipes()->sync($recipe);

        $recipe = [4];
        $order   = Order::find(3);
        $order->recipes()->sync($recipe);

        $recipe = [3];
        $order   = Order::find(4);
        $order->recipes()->sync($recipe);

        $products = [61,103,22,91,7,92,104,101,24,33,25,28,31,29,93,60];
        $recipe   = Recipe::find(1);
        $recipe->products()->sync($products);

        $products = [69,33,25,28,31,29,93,60];
        $recipe   = Recipe::find(2);
        $recipe->products()->sync($products);

        $products = [1,3,5,7,9];
        $recipe   = Recipe::find(3);
        $recipe->products()->sync($products);

        $products = [61,63,65,67,69];
        $recipe   = Recipe::find(4);
        $recipe->products()->sync($products);

        $products = [12,23,45,22,33];
        $recipe   = Recipe::find(5);
        $recipe->products()->sync($products);

        $products = [11,22,33,44,55,66];
        $recipe   = Recipe::find(5);
        $recipe->products()->sync($products);

        $products = [56,43,2,3,4,5];
        $recipe   = Recipe::find(6);
        $recipe->products()->sync($products);

        $products = [3,9,12,15,18,21,24];
        $recipe   = Recipe::find(7);
        $recipe->products()->sync($products);

        $products = [5,10,15,20,25,30];
        $recipe   = Recipe::find(8);
        $recipe->products()->sync($products);

        $products = [20,18,16,14,12];
        $recipe   = Recipe::find(9);
        $recipe->products()->sync($products);

        $products = [61,62,63,64];
        $recipe   = Recipe::find(10);
        $recipe->products()->sync($products);

        $products = [12,34,56,78];
        $recipe   = Recipe::find(11);
        $recipe->products()->sync($products);

        $products = [9,7,6,5,4,3];
        $recipe   = Recipe::find(12);
        $recipe->products()->sync($products);


        $products = [73,100,133];
        $order   = Order::find(5);
        $order->products()->sync($products);

        $products = [5];
        $order   = Order::find(1);
        $order->products()->sync($products);

        $products = [3,25,55];
        $order   = Order::find(2);
        $order->products()->sync($products);

        $products = [82,138,62];
        $order   = Order::find(3);
        $order->products()->sync($products);

        $products = [50];
        $order   = Order::find(4);
        $order->products()->sync($products);

        $products = [69];
        $order   = Order::find(5);
        $order->products()->sync($products);




        $categories=Category::all();
       return view('home',['categories'=>$categories]);

    }


    public function category_view()
    {

       return view('frontend.categoryview.category');

    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $products =Product::where('category_id','=',$category->id)->latest()->paginate(16);
        return view('frontend.categoryview.category',['products'=>$products]);
    }


}
