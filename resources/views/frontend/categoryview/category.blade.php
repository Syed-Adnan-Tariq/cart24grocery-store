@extends('layouts.app')

@section('title')
    Category
@endsection

@section('content')



    <div style="background-color:#f1f1f1 ">
        <br><br><br>
        @if(Session::has('cart'))
                <div class="container" style="padding-left: 8%">
                    <div class="progress" >
                        <div class="progress-bar progress-bar-striped progress-bar-success active"
                             role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <strong>25% Order Complete</strong>
                        </div>
                    </div>
                </div>
          @endif
            <div class="row">
            <div class="row"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1" style="padding-top: 10%">
                {{--<p><b>Special Offers</b></p>--}}

                <form action="{{route('products.search_results')}}" method="get">
                <div class="checkbox">
                    <label>
                        {{--<input type="checkbox" name="sale" {{ old('remember') ? 'checked' : '' }}>Sale--}}
                    </label>
                </div>
                <br><br>
                {{--<p><b>Brands</b></p>--}}
                <div class="checkbox">
                    <label>
                        {{--<input type="checkbox" name="nestle" {{ old('remember') ? 'checked' : '' }}>Nestle--}}
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        {{--<input type="checkbox" name="honda"  {{ old('remember') ? 'checked' : '' }}>Honda--}}
                    </label>
                </div>
                </form>
                <a href="{{route('category.home')}}"></a>
            </div>
            <div style="padding-top: 3%">

                <div class="col-md-9 " style="background-color: white">
                    @foreach($products->chunk(4) as $productChunk)
                        <div class="row">
                        @foreach($productChunk as $product)
                        <div class="col-sm-6 col-md-3">
                            <div class="img-thumbnail " style="border: none">
                                <a href="/productdetail/{{$product->id}}">
                                    <img class="img-rounded" id="image_size" src="/{{$product->imagePath}}" alt="{{$product->title}}">
                                </a>
                                <div style="text-align: center">
                                    <p>{{$product->title}}</p>

                                    @if($product->discount>0)
                                        <p style="color:#81bc00">RS {{$product->price - $product->discount}} </p>
                                        <del style="color: red "> {{$product->price}}</del>
                                    @else
                                        <p style="color: #81bc00 ">Rs. {{$product->price}}</p>
                                    @endif
                                </div>

                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div>
                                        <div>
                                            <a href="{{route('products.add_to_cart',$product->id)}}" class="button"><span class="glyphicon glyphicon-shopping-cart" id="{{$product->id}}"></span> Add to cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>

                            </div>
                        </div>
                    @endforeach
                        </div>
                    @endforeach

                        <br>
                        <br>
                        <div  style="text-align:right">
                            {{$products->links()}}
                        </div>
                </div>

            </div>

        </div>

    </div>





@endsection

