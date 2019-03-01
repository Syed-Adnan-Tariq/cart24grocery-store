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
use App\Feedback;
Class MasterComposer
{
    public function create(View $view)
    {
        $suggestion =  Feedback::where('feedback_type','=','suggestion')->count();
        $compliment =  Feedback::where('feedback_type','=','compliment')->count();
        $complaint =  Feedback::where('feedback_type','=','complaint')->count();
        $view->with('suggestion',$suggestion);
        $view->with('compliment',$compliment);
        $view->with('complaint',$complaint);
    }
}