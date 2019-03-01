@extends('layouts.app')

@section('title')
  product details
@endsection

@section('content')


<div style="background-color: aliceblue">

<div class="row page_top_padding">

</div>

<div class="container "  style="background-color: white">
    <div class="row container_top_padding">
        <div class="col-md-6">


            <img id="myimage" src="/{{$product->imagePath}}" />
        </div>

        <div class="col-md-4">
            <h3>{{$product->title}}</h3>
            <div class="panel panel-default">
                <div class="panel-heading price" >Rs. <strong>{{$product->price}}</strong>
                    <strong class="discount">@if ($product->discount > 0 ) OFF {{$product->discount}} Rs @endif</strong></div>
                <div class="panel-body" style="color: green"><strong>In Stock</strong></div>
            </div>
            <div class="row">
                <div class="col-md-3" ></div>
                    <a href="{{route('products.add_to_cart',$product->id)}}" type="button" class=" button button2"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>

                {{--<div class="col-md-3"></div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" onclick="minus{{$product->id}}()" data-field="">--}}
                                          {{--<span class="glyphicon glyphicon-minus"></span>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                        {{--<input type="text" id="quantity{{$product->id}}" name="quantity" class="form-control input-number" value="1" min="1" max="100" style="width: 86px">--}}
                        {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" onclick="plus{{$product->id}}()"  data-field="">--}}
                                            {{--<span class="glyphicon glyphicon-plus"></span>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                    {{--</div>--}}

                {{--</div>--}}
            </div>



        </div>


        <div class="col-md-3"></div>

    </div>
    <div class="row" style="padding-top: 10%">
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading"> FAST SHIPPING </div>
                    <div class="panel-body" style="text-align: center"><img src="/images/fastshipping.svg" width="100" height="100"/><br><br> their are so beautiful p-cup for shipping services of you bundle of items.</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading"> EASY RETURNS</div>
                    <div class="panel-body" style="text-align: center"><img src="/images/easyreturns.svg" width="100" height="100"/><br><br> their are so beautiful p-cup for shipping services of you bundle of items.</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-success">
                    <div class="panel-heading"> ALWAYS AUTHENTIC </div>
                    <div class="panel-body" style="text-align: center"><img src="/images/authentic.svg" width="100" height="100"/><br><br> their are so beautiful p-cup for shipping services of you bundle of items.</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group">
                <div class="panel panel-danger">
                    <div class="panel-heading"> SECURE SHOPPING </div>
                    <div class="panel-body" style="text-align: center"><img src="/images/secure.svg" width="100" height="100"/><br><br> their are so beautiful p-cup for shipping services of you bundle of items.</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script>

    var quantity1=1;

    var count = document.getElementById("quantity{{$product->id}}");

    function plus{{$product->id}}() {

        quantity1++;
        count.value=quantity1;
    }
    function minus{{$product->id}}() {

        if(quantity1 > 1){
            quantity1--;
            count.value=quantity1;
        }

    }
</script>

@endsection