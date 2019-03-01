
    <div >
        <div id="textslider" class="panel-heading">
            <marquee behavior="scroll" direction="left"> <strong style="color: white"><img src="" alt="">Next Delivery Time  5:00  PM</strong></marquee>
        </div>
    </div>
    <br>
                     <div class="row display-inline " >
                        <div class="col-sm-5 col-md-5">
                            <div class="header-wrapper-left">
                                <div class="logo-left">
                                    <a href="{{route('category.home')}}"><img class="img-responsive" src="/images/download.jpg" alt="Cart24"></a>
                                </div>
                            </div>
                        </div>

                         <br>
                         <br>

                         <div class="col-md-3 col-sm-3" >

                             <form action="{{route('products.search_results')}}" method="get" >
                                 {{ csrf_field() }}
                                 <div class="input-group input-group-lg " style="width: 400px">
                                     <input type="text" class="form-control" name="search"  placeholder="Search..." align="right"  value="{{request()->input('search') }}">
                                     <div class="input-group-btn">
                                         <button class="btn btn-default" style="background-color:forestgreen" type="submit">
                                             <i class="glyphicon glyphicon-search" style="color: white" ></i>
                                         </button>

                                     </div>
                                 </div>
                             </form>

                         </div>
                         <div class="col-md-1"></div>

                         <div class="col-md-1">

                             <a href="{{asset('/recipes')}}"> <img class="img-responsive" src="/images/recipe.png" alt="Recipe"></a>

                         </div>


                         <div class="col-md-1 " >
                             <span class="badge" id="note">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                             <a href="{{asset('/cart')}}"> <img class="img-responsive" src="/images/cart_icon.png" alt="Cart"></a>

                         </div>
@if(Auth::user())
                         <div class="col-md-1 " >
                             <a href="{{route('products.order_history')}}"> <img class="img-responsive" src="/images/order history.png" alt="Cart"></a>

                         </div>
@endif
                     </div>