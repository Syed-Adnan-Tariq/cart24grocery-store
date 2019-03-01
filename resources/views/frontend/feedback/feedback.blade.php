@extends('layouts.app')
@section('title')
  Feedback
@endsection
@section('content')


    <div style="background-color: aliceblue">
        <div class="container">
            {{--<div class="row">--}}
                <div class="col-md-3"></div>
                <div id="form" class="col-sm-6">
                    <h3 style="text-align: center">Feedback</h3>
                    <br>
                    <form method="POST" action="{{route('feedback')}}">
                        {{ csrf_field() }}
                        <div  class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">

                            <label for="contact number">Email Address:</label>
                            <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">

                            <label for="type of feedback">Type of feedback:</label>
                            <select class="form-control" name="feedback_type">
                                <option>Compliment</option>
                                <option>Suggestion</option>
                                <option>Complaint</option>
                            </select>

                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="4" required></textarea>


                        </div>
                        <br>

                        <button type="submit" class="btn btn-success">Submit</button>

                    </form>
                    <br>
                    <br>
                </div>
            {{--</div>--}}
        </div>
    </div>

@endsection