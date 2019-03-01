@extends('layouts.app')

@section('title')
    category
@endsection

@section('content')

    <div style="background-color:#f1f1f1 ">
        <div class="row">
            <div class="col-md-1" style="padding-top: 10%" ><br></div>

                <h2>Search Result</h2>
                <p> results for "<strong>{{request()->input('search')}}</strong>"</p>
            <br>
            <hr>


                <div class="col-md-10 " style="background-color: white">

                               @foreach($products->chunk(4) as $Chunkproducts)
                                    <div class="row">
                                        @foreach($Chunkproducts as $product)
                                        <div class="col-sm-6 col-md-3">
                                            <div class="img-thumbnail " style="border: none">
                                                <a href="{{route('products.product_detail',$product->id)}}"><img id="image_size" class="img-rounded" src="/{{$product->imagePath}}" alt="{{$product->title}}"></a>
                                                <div style="text-align: center">
                                                    <p>{{$product->title}}</p>
                                                    <p>Rs. {{$product->price}}</p>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2">
                                                    <div>
                                                        <a href="{{route('products.add_to_cart',$product->id)}}"  class="button"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                        @endforeach


                                @foreach($recipes->chunk(4) as $Chunkrecipes)
                                    <div class="row">
                                        @foreach($Chunkrecipes as $recipe)
                                <div class="col-sm-6 col-md-3">
                                    <div class="img-thumbnail " style="border: none">
                                        <a href="{{route('recipes.recipe_detail',$recipe->id)}}"><img class="img-rounded" src="{{$recipe->imagePath}}" alt="{{$recipe->title}}"></a>
                                        <div style="text-align: center">
                                            <p>{{$recipe->title}}</p>
                                            <p>Rs. {{$recipe->price}}</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <div>
                                                <a href="{{route('recipes.addcart',$recipe->id)}}"  class="button"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>

                                    </div>
                                </div>
                                        @endforeach
                                    </div>
                        @endforeach

                    <h2></h2>
                </div>

            </div>
        </div>



@endsection