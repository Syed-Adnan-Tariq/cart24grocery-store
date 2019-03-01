
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

    </div>

@endsection