<br>
<br>

    <nav id="nav" class=" navbar navbar-default "  style="font-size: 15px">
                <ul class="nav navbar-nav "   >
                    <li class="active"><a href="{{route('category.home')}}"><strong>Cart24</strong></a></li>
                    @foreach($categories as $category)
                    <li><a id="hover" href="/category/{{$category->id}}" style="color: white">{{$category->name}}</a></li>
                    @endforeach
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    @if(Auth::user())
                        <li>
                            <a href="/logout" style="color: white"><span class="glyphicon glyphicon-log-out" style="color: white"></span>
                                LogOut
                            </a>
                        </li>
                    @else
                            <li >
                                <a href="/register" style="color: white"><span class="glyphicon glyphicon-user" style="color: white"></span>
                                    Sign Up
                                </a>
                            </li>
                            <li>
                                <a href="/login" style="color: white"><span class="glyphicon glyphicon-log-in" style="color: white"></span>
                                    Login
                                </a>
                            </li>
              @endif
                </ul>

            </div>
        </div>
    </nav>

