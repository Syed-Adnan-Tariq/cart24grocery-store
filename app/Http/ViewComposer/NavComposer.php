<?php
/**
 * Created by PhpStorm.
 * User: Khubaib
 * Date: 09/01/2019
 * Time: 1:31 AM
 */
namespace App\Http\ViewComposer;
use illuminate\View\View;
use App\Category;
Class NavComposer
{
    public function create(View $view)
    {
        $categories = Category::all();
        $view->with('categories',$categories);
    }
}