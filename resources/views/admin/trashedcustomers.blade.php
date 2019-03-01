@extends('admin.master.master')

@section('title')
   Trash Customers
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
                 Trashed or Block Customer
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> {{$users->count()}} </strong></em>
                </button>
                {{--<a href="" style="float: right" >--}}
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
                                <th class="col-md-2">User ID</th>
                                <th class="col-md-2">User Name </th>
                                <th class="col-md-2">Email</th>
                                <th class="col-md-2">Date & Time</th>
                                <th class="col-md-2">Location</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if($user->status == 0)
                                    <tr>
                                        <td  id="top_pad"><strong>{{$user->id}}</strong></td>
                                        <td  class="col-sm-1" id="top_pad"><strong>{{$user->name}}</strong></td>
                                        <td  id="top_pad" ><strong>{{$user->email}}</strong></td>
                                        <td  id="top_pad"> <strong> {{$user->created_at}} </strong></td>
                                        <td  id="top_pad"> <strong> {{$user->Address}} </strong></td>
                                        <td>
                                            <div class="btn-group" id="t_pad">
                                                <a href="/admin/customer/trash/{{$user->id}}" class="btn btn-success ">
                                                    <span class="fa fa-refresh"></span>
                                                </a>

                                                <a href="{{route('admin.customer_delete',$user->id)}}" class="btn btn-danger ">
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
                        {{$users->links()}}
                    </div>

                </div></div>
        </div>

    </div>

@endsection