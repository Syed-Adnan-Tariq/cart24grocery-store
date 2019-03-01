@extends('admin.master.master')

@section('title')
    Trash products
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
                    Trash Products
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$products->count()}} </strong></em>
                </button>
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
                                @if($product->status == 0)
                                    <tr>
                                        <td  id="top_pad"><strong>{{$product->id}}</strong></td>
                                        <td   id="top_pad"><strong>{{$product->title}}</strong></td>
                                        <td   id="top_pad"><strong>{{$product->price}}</strong></td>
                                        <td> <img src="/{{$product->imagePath}}" alt="imageUrl"  style="height: 120px "></td>

                                        <td>
                                            <div class="btn-group" id="t_pad">
                                                <a href="/admin/product/trash/{{$product->id}}" class="btn btn-success ">
                                                    <span class="fa fa-refresh"></span>
                                                </a>

                                                <a href="{{route('admin.product_delete',$product->id)}}" class="btn btn-danger ">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
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