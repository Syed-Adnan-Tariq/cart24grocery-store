<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    {{--@include('partials.head')--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->

    <script  src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" >
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" crossorigin="anonymous">
    <script  src="{{asset('/js/bootstrap.min.js')}}" ></script>
    <script  src="{{asset('/js/frontend.js')}}"></script>


</head>


<body>


       @include('partials.header')

       @include('partials.nav')

<div class="container">
    @if(Session()->has('message'))

        <p class="alert alert-success" id="alert">
            {{Session()->get('message')}}
        </p>

    @elseif(Session()->has('danger'))
        <p class="alert alert-danger" id="alert">
            <strong>
                {{Session()->get('danger')}}
            </strong>
        </p>

    @elseif(Session()->has('info'))
        <p class="alert alert-info" id="alert">
        {{Session()->get('info')}}
        </p>
    @endif
</div>


           @yield('content')

       <div class=" navbar-fixed-bottom " id="msg">
           <a href="/feedback"><img src="/images/msg.png" alt="msg" style="float: right" ></a>
       </div>

       @include('partials.footer')

</body>

</html>
