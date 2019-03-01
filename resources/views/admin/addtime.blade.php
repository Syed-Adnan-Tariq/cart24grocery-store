@extends('admin.master.master')

@section('title')
    Dashboard
@endsection

@section('content')

<div class="container">
    <form method="POST" action="{{route('admin.delivery_time')}}" style="width: 20%" id="new">
        {{ csrf_field() }}
        <div  class="form-group">

            <label for="contact number">Delivery Time:</label>
            <input type="time" name="time"  class="form-control">

        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
    @endsection