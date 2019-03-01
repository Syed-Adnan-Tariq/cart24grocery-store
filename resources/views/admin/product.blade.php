@extends('admin.master.master')

@section('title')
    Products
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
                    Products
                </strong>
                    <button class="btn btn-success ">
                        <em class="fa fa-chevron-circle-right"><strong> {{$product}} </strong></em>
                    </button>

                    <a href="{{route('admin.trash_product_show',0)}}" style="float: right" >
                        <button class="btn btn-info "><span class="fa fa-recycle"></span>
                            Recycle Bin
                        </button>
                    </a>
                    <a href="{{route('admin.product_form')}}" style="float: right" >
                        <button class="btn btn-success "><span class="fa fa-plus-square"></span>
                          New
                        </button>
                    </a>
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                @if($product->status == 1)
                                <tr>
                                    <td  id="top_padding"><strong>{{$product->id}}</strong></td>
                                    <td  class="col-sm-5" id="text_align"><strong>{{$product->title}}</strong></td>
                                    <td  id="top_padding" > Rs. <strong>{{$product->price}}</strong></td>
                                    <td> <img src="/{{$product->imagePath}}" alt="imageUrl" id="" style="height: 120px "></td>
                                    <td>
                                        <div class="btn-group" id="top_pad">

                                            <a href="{{route('admin.product_edit',$product->id)}}" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></span></a>

                                            <a href="{{route('admin.product_trash',$product->id)}}" class="btn btn-danger "> <span class="glyphicon glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div  style="text-align:center">
                        {{$products->links()}}
                    </div>

                </div></div>
        </div>

    </div>

    @endsection