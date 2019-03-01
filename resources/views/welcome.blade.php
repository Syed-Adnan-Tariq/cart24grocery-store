<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script  src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        <script  src="{{asset('/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>


    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header well">
                        <h1>Message</h1>
                    </div>
                    <div class="card-body" id="app">
                            <chat-app :user="{{auth()->user()}}"></chat-app>
                    </div>
                </div>
            </div>
        </div>
    </div>








        <script  src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
