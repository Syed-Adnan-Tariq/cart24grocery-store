<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Feedback;
use App\Http\Requests\{
    CategoryStore, AddRecipe, ProductStore
};
use App\Product;
use App\ProductRecipe;
use App\User;
use App\Recipe;
use App\Order;
use App\OrderProduct;
use App\OrderRecipe;
use App\Category;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Http\Middleware\AdminAuthentication;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $orders = Order::where('status','=',1)->get()->count();

        $complaints = Feedback::where('feedback_type','=','complaint')->get();

        $suggestions = Feedback::where('feedback_type','=','suggestion')->get();

        $compliments= Feedback::where('feedback_type','=','compliment')->get();

        $deliveries = Delivery::all();
//        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
//        $chart = Charts::database($users, 'bar', 'highcharts')
//            ->title("Monthly new Register Users")
//            ->elementLabel("Total Users")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->groupByMonth(date('Y'), true);
        return view('admin.dashboard',compact('orders','complaints','suggestions','compliments','deliveries'));
//        return view('chart',compact('chart'));
    }

    public function check()
    {

        return view('admin.addtime');
    }

    public function deliverytime(Request $request)
    {
        $request->validate([
            'time' => 'required',
        ]);

        $data = Delivery::create([
        'time' => $request->time,
    ]);
   if ($data){
       return back()->with('message',"Time add successfully");
   } else
        {
            return back()->with('message',"Re submit time");
        }

}

public function update(Request $request)
{

   $deliveries = Delivery::where('time','=',$request->time)->get();
   dd($deliveries->id);
      $status = $deliveries->status;
      dd($status);
      if ($status == 0)
      {
          $deliveries->status = 1;
      }
    $deliveries->status->update();
      if ($deliveries->status->update()){
      return back()->with('message',"set the Time");
}else{
      return back()->with('message',"error");
}}

    public function searchresults(Request $request)
    {
        $request->validate([

            'search' => 'required|string'
        ]);
        $search = $request->input('search');


    $products = Product::where('title' ,'like' ,"%$search%")->get();
    $recipes = Recipe::where('title' ,'like' ,"%$search%")->get();


        if($products->isEmpty() && $recipes->isEmpty()) {
            return back()->with('message',"Nothing matched your query");
            }
         return view('admin.searchresults',compact('products','recipes'));
    }

        /*
         -----------------------------------------------------------------------------------------
                                         Methods for product
         -----------------------------------------------------------------------------------------
        */


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productshow()
    {
        $product = Product::all()->count();
    $products = Product::paginate(10);
        return view('admin.product',compact('products','product'));
    }


    public function productform()
    {
        $categories = Category::all();
        return view('admin.addproduct',compact('categories'));
    }



    public function productstore(ProductStore $request )
    {
        $extension = ".".$request->imagePath->getClientOriginalExtension();
        $name = basename($request->imagePath->getClientOriginalName(),$extension);
        $name = $name.$extension;
        $category = Category::find($request->category_id);
        $path = $request->imagePath->move("images",$name);

        $product = Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'discount' => $request->discount,
            'imagePath' => $path,
            'category_id' => $request->category_id,
        ]);
//dd($product);
        if ($product) {
            return back()->with('message',"Product add successfully");
        }
        else {
            return back()->with('message',"Problem to adding Product");

        }

    }

    public function productedit(Product $product)
    {
        $categories = Category::all();
        $products = Product::find($product->id);
        return view('admin.editproduct',compact('products','categories'));
    }

public function productupdate(ProductStore $request,$product)
{
    $extension = ".".$request->imagePath->getClientOriginalExtension();
    $name = basename($request->imagePath->getClientOriginalName(),$extension);
    $name = $name.$extension;
    $path = $request->imagePath->move("images",$name);
    $products = Product::find($product);

        $products->title = $request->title;
        $products->price = $request->price;
        $products->discount  = $request->discount;
        $products->imagePath = $path;
        $products->category_id = $request->category_id;
        $products->update();

    if ($products->update()) {
        return redirect(route('admin.products'))->with('message',"Product update successfully");
    }
    else {
        return back()->with('message',"Problem to update Product");

    }
}

    public function producttrash($product)
    {
        $product =  Product::find($product);
        if ($product->status == 1 )
        {
            $product->status = 0;
            $product->update();
            return redirect('/admin/products')->with('message', "Data Successfully Modify");
        }
        else
        {
            $product->status = 1;
            $product->update();
            return back()->with('message', "Data Successfully Modify");
        }
    }

    public function productremove($remove)
    {

        DB::table('products')->where('id' ,$remove)->delete();
        return back()->with('message',"Delete Successfully");
    }

    public function trashprodcutshow($trash)
    {
        $products =  Product::where('status','=',$trash)->latest()->paginate(5);
        return view('admin.trashedproducts',compact('products'));
    }



    /*
     -----------------------------------------------------------------------------------------
                                        Methods for category
     -----------------------------------------------------------------------------------------
     */


    public function categoriesshow()
    {

    $categories = category::paginate(10);
        $category = Category::all()->count();
        return view('admin.categories',compact('categories','category'));
    }

    public function categoryshow(Category $category)
    {
        $product  = Product::where('category_id','=',$category->id)->count();
        $products = Product::where('category_id','=',$category->id)->latest()->paginate(3);

        return view('admin.categoryshow' ,compact('products','product'));
    }

    public function categoryform()
    {
        return view('admin.addcategory');
    }

    public function categorystore(CategoryStore $request)
    {

            $extension = ".".$request->imagePath->getClientOriginalExtension();
            $name = basename($request->imagePath->getClientOriginalName(),$extension);
            $name = time().'.'.$name.$extension;
            $path = $request->imagePath->move("images",$name);

            $category = Category::create([
            'name' => $request->name,
            'imagePath' => $path,
        ]);

        if ($category) {
            return back()->with('message',"Category add successfully");
        }
        else {
            return back()->with('message',"Problem to adding Category");

        }

    }

    public function categoryedit(Category $category)
    {

       $categories  = Category::find($category->id);
//       dd($categories);
       return view('admin.editcategory',compact('categories'));
    }

    public function categoryupdate(CategoryStore $request,$category )
{

    $extension = ".".$request->imagePath->getClientOriginalExtension();
    $name = basename($request->imagePath->getClientOriginalName(),$extension);
    $name = $name.$extension;
    $path = $request->imagePath->move("images",$name);

    $categories = Category::find($category);

        $categories->name = $request->name;
        $categories->imagePath =$path;
        $categories->update();

    if ($categories->update()) {
        return back()->with('message',"Category update successfully");
    }
    else {
        return back()->with('message',"Problem to updating Category");

    }
}

    public function categorytrash($category)
    {
        $categories =  Category::find($category);
        if ($categories->status == 1 )
        {
            $categories->status = 0;
            $categories->update();
            return redirect('/admin/categories')->with('message', "Data Successfully Modify");
        }
        else
        {
            $categories->status = 1;
            $categories->update();
            return back()->with('message', "Data Successfully Modify");
        }
    }

    public function trashcategoryshow($trash)
    {
        $categories =  Category::where('status','=',$trash)->latest()->paginate(5);
        return view('admin.trashedcategories',compact('categories'));
    }


    public function categoryremove($remove)
    {

        DB::table('categories')->where('id' ,$remove)->delete();
        return back()->with('message',"Delete Successfully");
    }




    /*
     -----------------------------------------------------------------------------------------
                                        Methods for Order
     -----------------------------------------------------------------------------------------
     */


    public function ordershow()
    {
        $order = Order::all()->count();
    $orders = Order::paginate(10);
        return view('admin.order',compact('orders','order'));
    }

    public function orderdetail(Order $order)
    {
                $orders  = Order::find($order->id);
                return view('admin.orderdetail',compact('orders'));
    }

    public function ordertrash($order)
    {
               $orders =  Order::find($order);
           if ($orders->status == 1 )
           {
               $orders->status = 0;
               $orders->update();
               return redirect('/admin/orders')->with('message', "Data Successfully Modify");
           }
           else
           {
               $orders->status = 1;
               $orders->update();
               return back()->with('message', "Data Successfully Modify");
           }
    }

    public function trashordershow($trash)
    {
                $orders =  Order::where('status','=',$trash)->latest()->paginate(5);
                return view('admin.trashedorders',compact('orders'));
    }


    public function orderremove($remove)
    {

                DB::table('orders')->where('id' ,$remove)->delete();
                return back()->with('message',"Delete Successfully");
    }





    /*
     -----------------------------------------------------------------------------------------
                                         Methods for Customer
     -----------------------------------------------------------------------------------------
     */


    public function customershow()
    {
        $user = User::all()->count();

        $users = User::paginate(10);

        return view('admin.customer',compact('users','user'));
    }

    public function customerdetail(User $user){

    $orders = Order::where('user_id','=',$user->id)->get();
    $order = Order::where('user_id','=',$user->id)->count();
    $users = User::where('id','=',$user->id)->get();

        return view('admin.customerdetail',compact('orders','order','users'));
    }

    public function customertrash($customer)
    {
        $user =  User::find($customer);
        if ($user->status == 1 )
        {
            $user->status = 0;
        }
        else
        {
            $user->status = 1;
//            $user->update();
//            return back()->with('message', "Status update Successfully");
        }
        $user->update();
        return redirect('/admin/customer')->with('message', "Status update Successfully");
    }

    public function customerremove($remove)
    {

        DB::table('users')->where('id' ,$remove)->delete();
        return back()->with('message',"Delete Successfully");
    }

    public function trashcustomershow($trash)
    {
        $users =  User::where('status','=',$trash)->latest()->paginate(5);
        return view('admin.trashedcustomers',compact('users'));
    }

    /*
     -----------------------------------------------------------------------------------------
                                           Methods for Recipe
     -----------------------------------------------------------------------------------------
     */


    public function recipeshow()
    {
        $recipe = Recipe::all()->count();
    $recipes = Recipe::paginate(10);
        return view('admin.recipe',compact('recipes','recipe'));
    }


    public function recipedetail(Recipe $recipe)
    {
        $recipes  = Recipe::find($recipe->id);
        return view('admin.recipedetail',compact('recipe','recipes'));
    }

    public function recipeform()
    {
        $products = Product::all();
        return view('admin.addrecipe',compact('products'));
    }

    public function recipestore(Request $request)
    {

       $request->validate([
            'title'         => 'required|string|max:255',
            'imagePath'     => 'required|mimes:jpeg,bmp,png',
            'vpath'         => 'required|string',
            'ingredients'   => 'required|string|max:5000',
            'cmethod'       => 'required|string|max:8000',
            'serve'         => 'required|numeric',
            'ctime'         => 'required|numeric|max:300',

        ]);

        $extension = ".".$request->imagePath->getClientOriginalExtension();
        $name = basename($request->imagePath->getClientOriginalName(),$extension);
        $name = '.'.$name.$extension.time();
        $path = $request->imagePath->move("images",$name);

        $rprice=0;
        $rdiscount=0;
        foreach ($request->product_id as $product)
{
    $product =Product::find($product);
   $rprice +=$product->price;
   $rdiscount +=$product->discount;
}

        $recipe=Recipe::create([

            'title'         =>$request->title,
            'imagePath'     =>$path,
            'videoPath'     =>$request->vpath,
            'ingredients'   =>$request->ingredients,
            'cooking_method'=>$request->cmethod,
            'serve'         =>$request->serve,
            'cooking_time'  =>$request->ctime,
            'price'         =>$rprice,
            'discount'      =>$rdiscount,
        ]);

        foreach (Recipe::all() as $recipes)
        {}
        $recipe   = $recipes;
        $recipe->products()->sync($request->product_id);

        if ($recipe){
            return back()->with('message',"data insert successfully");
        }
        else{
            return back()->with('message',"Error");
        }

        }

    public function recipeupdate(Request $request,$recipe)
    {

        $request->validate([
            'title'         => 'required|string|max:255',
            'imagePath'     => 'required|mimes:jpeg,bmp,png',
            'vpath'         => 'required|string',
            'ingredients'   => 'required|string|max:5000',
            'cmethod'       => 'required|string|max:8000',
            'serve'         => 'required|numeric',
            'ctime'         => 'required|numeric|max:300',

        ]);
        $recipe = Recipe::find($recipe);

        $extension = ".".$request->imagePath->getClientOriginalExtension();
        $name = basename($request->imagePath->getClientOriginalName(),$extension);
        $name = '.'.$name.$extension.time();
        $path = $request->imagePath->move("images",$name);

        $rprice=0;
        $rdiscount=0;

        foreach ($request->product_id as $product)
        {
            $product    =Product::find($product);
            $rprice     +=$product->price;
            $rdiscount  +=$product->discount;
        }


        $recipe->title          =$request->title;
        $recipe->imagePath      = $path;
        $recipe->videoPath      = $request->vpath;
        $recipe->ingredients    = $request->ingredients;
        $recipe->cooking_method = $request->cmethod;
        $recipe->serve          = $request->serve;
        $recipe->cooking_time   = $request->ctime;
        $recipe->price          = $rprice;
        $recipe->discount       = $rdiscount;
        $recipe->update();



        $recipe->products()->sync($request->product_id);

        if ($recipe->update()){
            return redirect('/admin/recipe')->with('message',"data update successfully");
        }
        else{
            return back()->with('message',"Error");
        }

    }

        public function recipeedit(Recipe $recipe)
        {
            $recipe = Recipe::find($recipe->id);
            $products = Product::all();
//dd($recipe);
            return view('admin.editrecipe',compact('recipe','products'));
        }

    public function recipetrash($recipe)
    {
        $recipe =  Recipe::find($recipe);
        if ($recipe->status == 1 )
        {
            $recipe->status = 0;
            $recipe->update();
            return redirect('/admin/recipe')->with('message', "Data Successfully Modify");
        }
        else
        {
            $recipe->status = 1;
            $recipe->update();
            return back()->with('message', "Data Successfully Modify");
        }
    }

    public function reciperemove($remove)
    {

            DB::table('recipes')->where('id' ,$remove)->delete();
            return back()->with('message',"Delete Successfully");
    }

    public function trashrecipeshow($trash)
    {
        $recipes =  Recipe::where('status','=',$trash)->latest()->paginate(5);
        return view('admin.trashedrecipes',compact('recipes'));
    }


}
