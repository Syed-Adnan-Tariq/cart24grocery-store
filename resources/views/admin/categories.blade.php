@extends('admin.master.master')

@section('title')
    Category
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
                    Category
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$category}} </strong></em>
                </button>

                <a href="{{route('admin.trash_category_show',0)}}" style="float: right" >
                    <button class="btn btn-info "><span class="fa fa-recycle"></span>
                        Recycle Bin
                    </button>
                </a>
                <a href="{{route('admin.category_form')}}" style="float: right" >
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
                                <th class="col-md-2">Category ID</th>
                                <th class="col-md-2">Category Name </th>
                                <th class="col-md-2">Image</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                @if($category->status == 1)
                                <tr>
                                    <td  id="top_pad"><strong>{{$category->id}}</strong></td>
                                    <td   id="top_pad"><strong>{{$category->name}}</strong></td>
                                    <td> <img src="/{{$category->imagePath}}" alt="imageUrl"  style="height: 120px "></td>

                                    <td>
                                        <div class="btn-group" id="t_pad">
                                            <a href="/admin/category/{{$category->id}}" class="btn btn-success ">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>

                                            <a href="{{route('admin.category_edit',$category->id)}}" class="btn btn-primary ">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>

                                            <a href="{{route('admin.category_trash',$category->id)}}" class="btn btn-warning">
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
                        {{--{{$categories->links()}}--}}
                    </div>

                </div></div>
        </div>

    </div>

@endsection