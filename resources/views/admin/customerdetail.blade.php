@extends('admin.master.master')

@section('title')
    Customer Detail
@endsection

@section('content')


    <div class="container">
        <div class="row">

            @foreach($users as $user)
            <h2><strong> {{$user->name}} </strong></h2>
            <h4> {{$user->email}} </h4>
                <br>
                <br>
            <div class="col-md-8">
                <br>
                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            <strong>
                              User Orders
                            </strong>
                            <button class="btn btn-success ">
                                <em class="fa fa-chevron-circle-right"><strong> {{$order}} </strong></em>
                            </button>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-sm-12">
                                    <table class="table table-hover fixed-table-scroll-outer " >
                                        <thead class="table" id="table_style">
                                        <tr>
                                            <th><strong>Order ID</strong></th>
                                            <th><strong>Date</strong></th>
                                            <th><strong>Price</strong></th>
                                            <th><strong>Image</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                        <td id="top_padding">{{$order->id}} </td>
                                        <td id="top_padding"><strong>{{$order->created_at}}</strong></td>
                                        <td id="top_padding"><strong>{{$order->price}}</strong></td>
                                        <td><img src="/images/order list.png" alt="order Image"> </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            {{--<div class="col-sm-2">--}}
                {{--<br>--}}
                {{--<p> <Strong> User Status </Strong></p>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2">--}}
                {{--<label class="switch" >--}}
                    {{--<input type="checkbox" @if ($user->status == 1) checked  @endif>--}}
                    {{--<span class="slider round"></span>--}}
                {{--</label>--}}
            {{--</div>--}}

                         <div class="col-md-4" style="float: right" >
                            <br>
                            <div class="panel-group">
                                <div class="panel panel-success">
                                    <div class="panel-body" style="background-color: gainsboro">
                                        <h4 class="glyphicon glyphicon-bookmark"><strong > Postal Address </strong></h4>
                                        <hr>
                                        <h4>{{$user->Address}}</h4><br>
                                        <hr>
                                        <h4 class="glyphicon glyphicon-phone" ><strong> Phone No </strong></h4>
                                        <h4>{{$user->Telephone}}</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>
    </div>

    @endsection