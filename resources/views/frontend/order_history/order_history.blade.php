


@extends('layouts.app')

@section('title')
    Order History
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h2>Order History</h2>
            <div class="col-md-8">
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><strong>Order</strong></th>
                                <th><strong>Date</strong></th>
                                <th><strong>Price</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)

                                <tr>
                                    <td><a href="{{route('products.order_detail',$order->id)}}"><img src="images/order list.png" alt="previous Order"></a> </td>
                                    <td>
                                        <strong>{{$order->created_at}}</strong>
                                    </td>
                                    <td>
                                        <strong>{{$order->price}}</strong>
                                    </td>
                                    {{--<td>--}}
                                        {{--<a href=" "><img src="images/reorder.png" alt=""></a>--}}
                                    {{--</td>--}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
@endsection
