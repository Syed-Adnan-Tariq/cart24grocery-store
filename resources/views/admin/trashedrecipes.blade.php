@extends('admin.master.master')

@section('title')
    Recipe
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
                   Trashed Recipes
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$recipes->count()}} </strong></em>
                </button>
                {{--<a href="{{route('admin.trash_recipe_show',0)}}" style="float: right" >--}}
                    {{--<button class="btn btn-info "><span class="fa fa-recycle"></span>--}}
                        {{--Recycle Bin--}}
                    {{--</button>--}}
                {{--</a>--}}
                {{--<a href="{{route('admin.recipe_form')}}" style="float: right" >--}}
                    {{--<button class="btn btn-success "><span class="fa fa-plus-square"></span>--}}
                        {{--New--}}
                    {{--</button>--}}
                {{--</a>--}}

            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover fixed-table-scroll-outer " >
                            <thead class="table" id="table_style">
                            <tr>
                                <th>Recipe ID</th>
                                <th>Recipe Name</th>
                                <th>Unit Price</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($recipes as $recipe)
                                @if($recipe->status == 0)
                                <tr>
                                    <td  id="top_padding"><strong>{{$recipe->id}}</strong></td>
                                    <td  class="col-sm-3" id="text_align"><strong>{{$recipe->title}}</strong></td>
                                    <td  id="top_padding" > Rs. <strong>{{$recipe->price}}</strong></td>
                                    <td  id="top_padding" style="color: red" > Rs. <strong>{{$recipe->discount}}</strong></td>
                                    <td> <img src="/{{$recipe->imagePath}}" alt="imageUrl" id="" style="height: 120px "></td>
                                    <td>
                                        <div class="btn-group" id="top_pad">
                                            <a href="{{route('admin.recipe_trash',$recipe->id)}}" class="btn btn-success "><span class="fa fa-refresh"></span></a>

                                            <a href="{{route('admin.recipe_delete',$recipe->id)}}" class="btn btn-danger "> <span class="glyphicon glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div  style="text-align:center">
                        {{$recipes->links()}}
                    </div>

                </div></div>
        </div>

    </div>

@endsection