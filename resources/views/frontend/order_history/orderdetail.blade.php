@extends('layouts.app')

@section('title')
    Order Details
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
                    Orders Detail
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> 5 </strong></em>
                </button>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover fixed-table-scroll-outer " >
                            <thead class="table" id="table_style">
                            <tr>

                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->recipes as $recipe)

                                <tr>

                                    <td  class="col-sm-5" id="text_align"><strong>{{$recipe->title}}</strong></td>
                                    <td  id="top_padding" > Rs. <strong>{{$recipe->price}}</strong></td>
                                    <td> <img src="/{{$recipe->imagePath}}" alt="imageUrl" id="" style="height: 120px "></td>

                                    <td>
                                        <div class="btn-group" id="top_pad">
                                            <a href="{{route('products.recipe_detail_view',$recipe->id)}}" class="btn btn-success ">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                            @foreach($order->products as $product)
                                <tr>

                                    <td  class="col-sm-5" id="text_align"><strong>{{$product->title}}</strong></td>
                                    <td  id="top_padding" > Rs. <strong>{{$product->price}}</strong></td>
                                    <td> <img src="/{{$product->imagePath}}" alt="imageUrl" id="" style="height: 120px "></td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-11"></div>
                <a href="{{route('products.reorder',$order->id)}}"><img src="/images/reorder.png" alt="reorder"></a>

        </div>

    </div>



@endsection