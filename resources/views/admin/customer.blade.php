@extends('admin.master.master')

@section('title')
    Customers
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
                    Customer
                </strong>
                <button class="btn btn-success ">
                    <em class="fa fa-chevron-circle-right"><strong> </strong></em>
                </button>
                <a href="{{route('admin.trash_customer_show',0)}}" style="float: right" >
                    <button class="btn btn-info "><span class="fa fa-recycle"></span>
                        Recycle Bin
                    </button>
                </a>
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
                                @if($user->status == 1 && $user->role_id== 1)
                                <tr>
                                    <td  id="top_pad"><strong>{{$user->id}}</strong></td>
                                    <td  class="col-sm-1" id="top_pad"><strong>{{$user->name}}</strong></td>
                                    <td  id="top_pad" ><strong>{{$user->email}}</strong></td>
                                    <td  id="top_pad"> <strong> {{$user->created_at}} </strong></td>
                                    <td  id="top_pad"> <strong> {{$user->Address}} </strong></td>
                                    <td>
                                        <div class="btn-group" id="t_pad">
                                            <a href="/admin/customer/{{$user->id}}" class="btn btn-success ">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </a>

                                            <a href="{{route('admin.customer_trash',$user->id)}}" class="btn btn-warning ">
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