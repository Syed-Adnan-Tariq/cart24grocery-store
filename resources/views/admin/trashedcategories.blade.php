@extends('admin.master.master')

@section('title')
Trash Categories
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
                    Trash Categories
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$categories->count()}} </strong></em>
                </button>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover fixed-table-scroll-outer " >
                            <thead class="table" id="table_style">
                            <tr>
                                <th class="col-md-2">Category ID</th>
                                <th class="col-md-2">Category Name </th>
                                <th class="col-md-2">Image</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                @if($category->status == 0)
                                    <tr>
                                        <td  id="top_pad"><strong>{{$category->id}}</strong></td>
                                        <td   id="top_pad"><strong>{{$category->name}}</strong></td>
                                        <td> <img src="/{{$category->imagePath}}" alt="imageUrl"  style="height: 120px "></td>

                                        <td>
                                            <div class="btn-group" id="t_pad">
                                                <a href="/admin/category/trash/{{$category->id}}" class="btn btn-success ">
                                                    <span class="fa fa-refresh"></span>
                                                </a>

                                                <a href="{{route('admin.category_delete',$category->id)}}" class="btn btn-danger ">
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
                        {{$categories->links()}}
                    </div>

                </div></div>
        </div>

    </div>



@endsection