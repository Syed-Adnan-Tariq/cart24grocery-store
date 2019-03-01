@extends('layouts.app')

@section('title')
    category
@endsection

@section('content')

    <div style="background-color:#f1f1f1 ">
        @if(Session::has('cart'))
            <div class="container" style="padding-left: 8%">
                <br><br><br>
                <div class="progress" >
                    <div class="progress-bar progress-bar-striped progress-bar-success active"
                         role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        <strong>25% Order Complete</strong>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-9"></div>
            <div class="dropdown">
                <div class="dropdown-content">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="row"></div>
            <div class="col-md-1"></div>
            <div class="col-md-1" style="padding-top: 10%">
                <br><br>
            </div>
            <div style="padding-top: 3%">

                <div class="col-md-9 " style="background-color: white">
                    <br>
                @foreach($recipes->chunk(4) as $recipeChunk)
                    <div class="row">
                        @foreach($recipeChunk as $recipe)
                        <div class="col-sm-6 col-md-3">
                            <div class="img-thumbnail " style="border: none">
                                <a href="{{route('recipes.recipe_detail',$recipe->id)}}"><img class="img-rounded"  src="{{$recipe->imagePath}}" alt="{{$recipe->title}}"></a>
                                <div style="text-align: center"><br>
                                    <p><strong>{{$recipe->title}}</strong></p>
                                    <p style="color: #81bc00">Rs. {{$recipe->price}}</p>
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
                    <br>
                </div>
            </div>
        </div>

    </div>

@endsection