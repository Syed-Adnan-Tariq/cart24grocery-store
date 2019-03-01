@extends('admin.master.master')

@section('title')
    Order
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
    </div>



    <div class="container">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <strong>
                    Trashed Orders
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$orders->count()}} </strong></em>
                </button>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover fixed-table-scroll-outer " >
                            <thead class="table" id="table_style">
                            <tr>
                                <th class="col-md-2">Order ID</th>
                                <th class="col-md-2">Quantity </th>
                                <th class="col-md-2">Order Price</th>
                                <th class="col-md-2">Date & Time</th>
                                <th class="col-md-2">  User ID</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @if($order->status == 0)
                                    <tr>
                                        <td  id="top_pad"><strong>{{$order->id}}</strong></td>
                                        <td  class="col-sm-1" id="top_pad"><strong>{{$order->Quantity}}</strong></td>
                                        <td  id="top_pad" > Rs. <strong>{{$order->price}}</strong></td>
                                        <td  id="top_pad"> <strong> {{$order->created_at}} </strong></td>
                                        <td  id="top_pad"> <strong> {{$order->user_id}} </strong></td>
                                        <td>
                                            <div class="btn-group" id="t_pad">
                                                <a href="{{route('admin.order_trash',$order->id)}}" class="btn btn-success "><span class="fa fa-refresh"></span></a>

                                                <a href="{{route('admin.order_delete',$order->id)}}" class="btn btn-danger "> <span class="fa fa-trash-o"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div  style="text-align:center">
                        {{$orders->links()}}
                    </div>

                </div></div>
        </div>

    </div>



@endsection