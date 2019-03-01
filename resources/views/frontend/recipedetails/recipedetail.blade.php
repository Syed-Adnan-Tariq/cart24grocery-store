@extends('layouts.app')

@section('title')
    Recipe details
@endsection

@section('content')
    <style>
        #more {display: none;}

        video {
           max-width: 100%;
            height: auto;
        }
#tab1{
    background-color: #81bc00;
    color: white;

}#tab2{
    background-color: orange;
    color: white;

}#tab3{
    background-color:blue;
    color: white;

}
 #menu1{
     background-color: #81bc00;
     color: white;
     text-align: center;

 }#menu2{
     background-color: orange;
     color: white;
     text-align: center;
 }#menu3{
     background-color: blue;
     color: white;
     text-align: center;
 }
        #tab_background{
            background-color: #81bc00;
            color: white;
        }

    </style>

    <div style="background-color: aliceblue">

        <div class="row page_top_padding">

        </div>

        <div class="container "  style="background-color: white">
            <div class="row container_top_padding">
                <div class="col-md-6">
                    <img id="myimage" src="/{{$recipe->imagePath}}" width="300" height="240"/>
                </div>

                <div class="col-md-4">
                    <h3>{{$recipe->title}}</h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">Rs.{{$recipe->price}}</div>
                        <div class="panel-body" style="color: green"><strong> In stock </strong></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                            <a href="{{route('recipes.addcart',$recipe->id)}}" type="button" class="button button2"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a>

                        {{--<div class="col-md-4">--}}
                            {{--<div class="input-group">--}}
                                    {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">--}}
                                          {{--<span class="glyphicon glyphicon-minus"></span>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                                {{--<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" style="width: 86px">--}}
                                {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">--}}
                                            {{--<span class="glyphicon glyphicon-plus"></span>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    </div>



                </div>
                <div class="col-md-3"></div>

            </div>
            <div class="row" style="padding-top: 10%"></div>
                <div class="row" style="text-align: center">

                    <iframe style=": center" width="900" height="500" src="{{$recipe->videoPath}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <br><br><br>

            <div class="panel panel-default ">
                <div class="panel-heading">
                    <strong>
                        Recipe Detail
                    </strong>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover fixed-table-scroll-outer " >
                                <thead class="table" id="table_style">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Image</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recipe->products as $product)
                                    <tr>
                                        <td  id="top_padding"><strong>{{$product->id}}</strong></td>
                                        <td  class="col-sm-5" id="text_align"><strong>{{$product->title}}</strong></td>
                                        <td  id="top_padding" > Rs. <strong>{{$product->price}}</strong></td>
                                        <td> <img src="/{{$product->imagePath}}" alt="imageUrl" id="" style="height: 120px "></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div></div>
            </div>

            <div class="container">





                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" id="tab1" href="#menu1"><strong> Ingredients </strong></a></li>
                        <li><a data-toggle="tab" id="tab2" href="#menu2"> <strong> Cooking Method </strong></a></li>
                        <li><a data-toggle="tab" id="tab3" href="#menu3"> <strong> Serve </strong></a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <h3>Ingredients</h3>
                            <p>{{$recipe->ingredients}}</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Cooking Method</h3>
                            <p >{{$recipe->cooking_method}}</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Serve</h3>
                            <p>{{$recipe->serve}} People</p>
                            <p>{{$recipe->cooking_time}} minutes</p>
                        </div>

                    </div>
                    <div class="col-md-4"></div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>

@endsection