



@extends('layouts.app')

@section('title')
    Cart
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h2>My Shopping Cart</h2>
            <div class="col-md-8">
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>subtotal</th>
                        </tr>
                        </thead>

                        @if(!Session::has('cart')||$cart->getTotalPrice()==0)
                            <div class="alert alert-info">
                                <p>Cart is Empty</p>
                            </div>
                        @else
                            @foreach($cart->getContents() as $product)
                                <input type="hidden" name="discount" value="{{$product['product']->discount}}" />
                                <tbody>
                                <tr>
                                    <td><img id="image_size" src="/{{$product['product']->imagePath}}" alt=""> <h5 style="display: inline">{{$product['product']->title}}</h5></td>
                                    <td>
                                        <div class="quantity">
                                            <form method="post" action="{{route('products.update', $product['product']->id)}}">
                                                {{ csrf_field() }}
                                                <div class="input-group">
                                                    <br><br><br><br>

                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <input type="number" name="qty" id="qty" class="form-control text-center" min="1" max="50" value="{{$product['qty']}}">
                                                            <input type="submit" value="Update" class="btn-success btn-block btn">
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>

                                    <td>
                                        <br><br><br><br> <strong>{{$product['price']}}</strong>
                                    </td>
                                    <td>
                                        <br><br><br><br>
                                        <div class="rem">
                                            <a href="{{route('products.remove', $product['product']->id)}}" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                            @endforeach
                        @endif
                    </table>

                </div>
            </div>
            <div class="col-md-2"> <a href="{{route('products.clear_cart')}}" style="color: red">
                    <span class="glyphicon glyphicon-trash"></span> Clear all </a> </div>
            <div class="col-md-4" >
                <br>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-body" style="background-color: gainsboro">
                            <h5> <strong>Order Summary</strong></h5>
                            <hr>
                            <h5 style="display: inline">Grocery Subtotal</h5><h5 style="float: right"> @if(!Session::has('cart')) 0 @else {{$cart->getTotalPrice()}} @endif Rs.</h5><br><br>

                            @if(Session::has('cart') && $cart->gettotalDiscount()!=0)
                            <h5 style="display: inline">Discount</h5> <h5 style="float: right">{{$cart->gettotalDiscount()}} Rs.</h5><br><br>
                            @endif

                            <h5 style="display: inline">Grocery Shipping Charges</h5><h5 style="float: right"> @if(!Session::has('cart')) 0 Rs. @elseif($cart->getTotalPrice()== 0) 0 Rs. @elseif($cart->getTotalPrice()< 2000) 200 Rs. @else Free @endif </h5><br><small style="color: red">@if(Session::has('cart') && $cart->getgrandTotal()<2000)*shop for 2000 Rs. or more and get free delivery! @else @endif</small><br><br>
                            <hr>
                            <h5 style="display: inline"><strong>Grand Total</strong></h5><h5 style="float: right"><strong>@if(!Session::has('cart')) 0 @else {{$cart->getgrandTotal()}} @endif Rs.</strong></h5>
                            <hr>


                        </div>
                    </div>
                </div>
                <div style="padding-left: 20px">
                    <a href="/"><button type="button" class="button button2" >Continue Shopping</button></a>
                    <a href="/checkout"><button type="button" class="button button2" style="background-color:orange" >Checkout</button></a>
                </div>
                <br><br>
                <div class="col-md-4"></div>
                <form action="your-server-side-code" method="POST">
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_qgM5Giz42odtMy3T57V7gxT8"
                            data-amount="@if(!Session::has('cart')) 0 @else {{$cart->getgrandTotal()}} @endif"
                            data-name="Cart24"
                            data-description="Example charge"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto">
                    </script>
                </form>
            </div>
        </div>
    </div>
@endsection