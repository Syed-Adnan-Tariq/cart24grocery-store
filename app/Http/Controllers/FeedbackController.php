<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if (Auth::user()){

            return view('frontend.feedback.feedback');
        }
        else
            {
              return redirect('/login')->with('info',"Please login first");
            }

    }

    public function feedback(Request $request)
    {

        $request->validate([
            'name'          =>'required|string|max:50',
            'email'         =>'required|email',
            'feedback_type' =>'required',
            'message'       =>'required|string|max:255',
        ]);

        $id =Auth::user()->id ;
        $user = User::find($id);
       $feedback = Feedback::create([

            'name'=>$user->name,
            'email'=>$user->email,
            'user_id'=>$id,
            'feedback_type'=>$request->feedback_type,
            'message'=>$request->message,
        ]);

        if ($feedback){
            return back()->with('message',"Thankyou for your feedback!");
        }else{
            return back()->with('danger',"please correct the errors and try again.");
        }
    }

    public function complaint()
    {

        $feedbacks = Feedback::where('feedback_type','=','complaint')->get();
        $type = 'Complaint';
        return view('admin.messages',compact('feedbacks','type'));
    }
    public function suggestion()
    {

        $feedbacks = Feedback::where('feedback_type','=','suggestion')->get();
        $type = 'Suggestion';
        return view('admin.messages',compact('feedbacks','type'));
    }
    public function compliment()
    {

        $feedbacks = Feedback::where('feedback_type','=','compliment')->get();
        $type = 'Compliment';
        return view('admin.messages',compact('feedbacks','type'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
