<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', 'HomeController@welcome');

Route::get('/contacts', 'HomeController@contacts');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/cart/{recipe}','RecipeController@show');


Route::group(['as' => 'recipes.'], function (){

    Route::get('/recipedetails/{recipe}', 'RecipeController@recipedetail')->name('recipe_detail');

    Route::get('/recipes', 'RecipeController@index')->name('recipe');

    Route::get('/addrecipetocart/{recipe}', 'RecipeController@addtocart')->name('addcart');
});

//Route::get('/feedback', function () {
//
//    return view('frontend.feedback.feedback');
//});
Route::get('/feedback', 'feedbackController@index');

Route::post('/newfeedback', 'feedbackController@feedback')->name('feedback');

Route::get('/', 'CategoryController@index')->name('category.home');

Route::group(['as' => 'products.'], function (){

    Route::get('/category/{category}', 'CategoryController@show')->name('category_detail');

    Route::get('/productdetail/{product}', 'ProductController@show')->name('product_detail');

    Route::get('/addtocart/{product}', 'ProductController@addtocart')->name('add_to_cart');

    Route::get('/search', 'ProductController@search')->name('search_results');

    Route::get('/cart', 'ProductController@cart')->name('cart');

    Route::get('/clearcart', 'ProductController@clearcart')->name('clear_cart');

    Route::get('/checkout', 'ProductController@store')->name('checkout');

    Route::get('/remove/{product}', 'ProductController@removeProduct')->name('remove');

    Route::get('/orderhistory', 'OrderController@order_history')->name('order_history');

    Route::get('/orderdetails/{order}', 'OrderController@orderdetail')->name('order_detail');

    Route::get('/order-detail-view/{recipe}', 'OrderController@recipedetailview')->name('recipe_detail_view');

    Route::get('/reorder/{order}', 'OrderController@reorder')->name('reorder');

    Route::post('/update/{product}', 'ProductController@updateProduct')->name('update');
});



Auth::routes();


Route::group(['as' => 'admin.' ,'middleware' => (['auth','admin'])],function (){


   Route::get('/dashboard' ,'AdminController@index')->name('dashboard');

   Route::get('/searchresults' ,'AdminController@searchresults')->name('search_results');

   Route::get('/admin/products','AdminController@productshow')->name('products');

   Route::get('/admin/categories','AdminController@categoriesshow')->name('categories');

   Route::get('/admin/categoryform','AdminController@categoryform')->name('category_form');

   Route::post('/admin/addcategory','AdminController@categorystore')->name('category_store');

   Route::get('/admin/category/{category}','AdminController@categoryshow')->name('category');

   Route::get('/admin/editcategory/{category}','AdminController@categoryedit')->name('category_edit');

   Route::post('/admin/updatecategory/{category}','AdminController@categoryupdate')->name('category_update');

   Route::get('/admin/orders','AdminController@ordershow')->name('order');

   Route::get('/admin/orders/{order}','AdminController@orderdetail')->name('order_detail');

   Route::get('/admin/customer','AdminController@customershow')->name('customer');

   Route::get('/admin/customer/{user}','AdminController@customerdetail')->name('customer_detail');

   Route::get('/admin/recipe','AdminController@recipeshow')->name('recipe');

   Route::get('/admin/recipeform','AdminController@recipeform')->name('recipe_form');

   Route::post('/admin/addrecipe','AdminController@recipestore')->name('recipe_store');

   Route::get('/admin/editrecipe/{recipe}','AdminController@recipeedit')->name('recipe_edit');

   Route::post('/admin/updaterecipe/{recipe}','AdminController@recipeupdate')->name('recipe_update');

   Route::get('/admin/recipe/{recipe}','AdminController@recipedetail')->name('recipe_detail');

   Route::get('/admin/productform','AdminController@productform')->name('product_form');

   Route::post('/admin/addproduct','AdminController@productstore')->name('product_store');

   Route::get('/admin/editproduct/{product}','AdminController@productedit')->name('product_edit');

   Route::post('/admin/updateproduct/{product}','AdminController@productupdate')->name('product_update');

   Route::get('/admin/order/trash/{order}','AdminController@ordertrash')->name('order_trash');

   Route::get('/admin/recipe/trash/{recipe}','AdminController@recipetrash')->name('recipe_trash');

   Route::get('/admin/category/trash/{category}','AdminController@categorytrash')->name('category_trash');

   Route::get('/admin/product/trash/{product}','AdminController@producttrash')->name('product_trash');

   Route::get('/admin/customer/trash/{customer}','AdminController@customertrash')->name('customer_trash');

   Route::get('/admin/trashorders/{trash}','AdminController@trashordershow')->name('trash_order_show');

   Route::get('/admin/trashrecipe/{trash}','AdminController@trashrecipeshow')->name('trash_recipe_show');

   Route::get('/admin/trashcategories/{trash}','AdminController@trashcategoryshow')->name('trash_category_show');

   Route::get('/admin/trashproduct/{trash}','AdminController@trashprodcutshow')->name('trash_product_show');

   Route::get('/admin/trashcustomer/{trash}','AdminController@trashcustomershow')->name('trash_customer_show');

   Route::get('/admin/order/{remove}/delete','AdminController@orderremove')->name('order_delete');

   Route::get('/admin/recipe/{remove}/delete','AdminController@reciperemove')->name('recipe_delete');

   Route::get('/admin/category/{remove}/delete','AdminController@categoryremove')->name('category_delete');

   Route::get('/admin/product/{remove}/delete','AdminController@productremove')->name('product_delete');

   Route::get('/admin/customer/{remove}/delete','AdminController@customerremove')->name('customer_delete');

   Route::get('/admin/messages/complaint','FeedbackController@complaint')->name('feedback_complaint');

   Route::get('/admin/messages/suggestion','FeedbackController@suggestion')->name('feedback_suggestion');

   Route::get('/admin/messages/compliment','FeedbackController@compliment')->name('feedback_compliment');

   Route::get('/admin/time','AdminController@check')->name('time');

   Route::post('/admin/deliverytime','AdminController@deliverytime')->name('delivery_time');

   Route::post('/admin/delivery-time-update','AdminController@update')->name('update');








});

