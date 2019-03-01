


@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('content')

    <style>
        #imgsize{
            width: 259px;
            height: 194px;
        }
    </style>

    <div class="container">
                <br>


                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="{{route('recipes.recipe')}}"> <img class="d-block w-100" src="images/carousel1.jpg" alt="New Recipe "></a>
                            <div class="carousel-caption">
                                <h3>Enjoy The Recipes </h3>
                                <p>First slide</p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="/category/1"><img class="d-block w-100" src="images/carousel2.jpg" alt="Slide 2"></a>
                            <div class="carousel-caption">
                                <h3>The Great Nature</h3>
                                <p>Second slide</p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="/category/3"><img class="d-block w-100" src="images/carousel3.jpg" alt="Vegetable and Fruit's"></a>
                            <div class="carousel-caption">
                                <h3>Fresh Vegetable & Fruits</h3>
                                <p>Third slide</p>
                            </div>
                        </div>
                    </div>
                    <a href="#carousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>

                    </a>
                    <a href="#carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>

                    </a>
                </div>

                <br>



                <a href=""><img  class="img-responsive" src="images/beautyimg1.jpg" alt="Jungle" width="100%" ></a>


                    <div  class="panel">
                        <div id="category-panel" class="panel-heading "><h4 >Categories</h4></div>
                        <div id="boarder" class="panel-body" >

                            @foreach($categories->chunk(4) as $categoryChunk)
                            <div class="row ">
                                @foreach($categoryChunk as $category)
                                <div class="col-sm-6 col-md-3">
                                    <div class="img-thumbnail " style="border: none">
                                        <a href="/category/{{$category->id}}"><img class="img-rounded categorypicture" id="imgsize" src="{{$category->imagePath}}" alt="Jungle"></a>
                                        <div style="text-align: center">
                                            <h4>{{$category->name}}</h4>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>




                <br>



                </div>


@endsection