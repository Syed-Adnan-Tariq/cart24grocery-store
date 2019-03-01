<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <link href="{{url('Admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('Admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('Admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{url('Admin/css/styles.css')}}" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="{{url('Admin/js/html5shiv.js')}}"></script>
    <script src="{{url('Admin/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{route('admin.dashboard')}}"><span>KB</span>Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{route('admin.feedback_suggestion')}}">
                        <em class="fa fa-envelope"></em><span class="label label-info">{{$suggestion}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href=" " class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{route('admin.feedback_compliment')}}">
                        <em class="fa fa-thumbs-o-up"></em><span class="label label-success">{{$compliment}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href=" " class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="{{route('admin.feedback_complaint')}}">
                        <em class="fa fa-thumbs-o-down"></em><span class="label label-danger">{{$complaint}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box"><a href=" " class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">3 mins ago</small>
                                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box"><a href="" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{url('http://placehold.it/40/30a5ff/fff')}}">
                                </a>
                                <div class="message-body"><small class="pull-right">1 hour ago</small>
                                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{url('http://placehold.it/50/30a5ff/fff')}}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search" action="{{route('admin.search_results')}}" method="get">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="search" class="form-control" value="{{request()->input('search')}}" placeholder="Search a product or recipe">
        </div>
    </form>
    <ul class="nav menu">
        <li ><a href="{{route('admin.dashboard')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="{{route('category.home')}}"><em class="fa fa-home">&nbsp;</em>Visit Site</a></li>
        <li><a href="{{route('admin.order')}}"><em class="fa  fa-shopping-cart "></em> Orders</a></li>
        <li><a href="{{route('admin.recipe')}}"><em class="fa fa-fire "></em> Recipe</a></li>
        <li><a href="{{route('admin.categories')}}"><em class="fa fa-list "></em> Category</a></li>
        <li><a href="{{route('admin.products')}}"><em class="fa fa-product-hunt "></em> Products</a></li>
        <li><a href="{{route('admin.customer')}}"><em class="fa fa-user "></em> customers</a></li>

        <li><a href="/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main ">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}"><em class="fa fa-home"></em></a>
            </li>
            <li  class="active"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
        </ol>
    </div>

    <br>
    <br>
    @if(Session()->has('message'))

        <p class="alert alert-success">

            {{Session()->get('message')}}

        </p>

    @endif



    @yield('content')






</div>

<script src="{{url('Admin/js/respond.min.js')}}"></script>
<script src="{{url('Admin/js/bootstrap.min.js')}}"></script>
<script src="{{url('Admin/js/chart.min.js')}}"></script>
<script src="{{url('Admin/js/chart-data.js')}}"></script>
{{--<script src="{{url('Admin/js/easypiechart.js')}}"></script>--}}
{{--<script src="{{url('Admin/js/easypiechart-data.js')}}"></script>--}}
{{--<script src="{{url('Admin/js/bootstrap-datepicker.js')}}"></script>--}}
<script src="{{url('Admin/js/custom.js')}}"></script>
<script>

    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
       };
</script>

</body>
</html>