<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!--IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--frist mobile mwta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show proudts</title>
    <link rel='stylesheet' href="{{asset('css/bootstrap.css')}}" />
    <link rel='stylesheet' href="{{asset('css/mystayel.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
       <![endif]-->

</head>

<body>


        <div class="row" id="nav">
            <div class="col-xs-12">
                <div class="header">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <img class="brand" src="{{asset('images/1.jpg')}}">
                                @if( isset( Auth::user()->id ) && Auth::user()->role ==1 )
                                <a href="{{url('admin')}}">admin</a>
                                @endif
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                                <ul class="nav navbar-nav navbar-right">
                                    @if(! isset( Auth::user()->id) )
                                    <li class="dropdown">
                                        <a href="{{url('user-login')}}" role="button" aria-haspopup="true"
                                            aria-expanded="false">Sign In </a>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="{{url('user-login')}}">User</a></li>
                                    <li><a href="{{url('admin-login')}}">Admin</a></li>

                                </ul> --}}
                                </li>
                                <ul class="nav navbar-nav">
                                    <li><a href="{{url('signup')}}">Sign Up</a></li>
                                </ul>
                                @else
                                <li class="dropdown">
                                    <a href="#" role="button">{{Auth::user()->name}} </a> </li>
                                <li><a href="{{url('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">logout</a></li>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endif
                                </ul>
                                <form class="navbar-form navbar-right">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>

                                    <button type="submit" class="btn btn-default">Submit</button>
                                    <a href="{{asset('cart')}}" class="btn btn-default" role="button">Cart</a>
                                    <!-- <button type="submit" class="btn btn-default">Card</button> -->
                                </form>

                            </div><!-- /.navbar-collapse -->


                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-2">
                Product Name: {{$product->name}}<br>
                Category:{{isset($product->category) ?$product->category->name: "--"}}<br>
                Num Of Product:{{$product->quantity}}<br>
                price:{{$product->price}}<br>
                Description
                <div class="description">{{$product->description}}</div>
            </div>
            <div class="col-xs-6">
                <img class="img-responsive" id="oscontentimg" src="{{asset($product->image)}}" width="300" height="300">


            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-8">
                {{-- <input type="number" id="quantity" name="quantity" min="1" max="100"> --}}
                {{-- <a class="btn" href="#." target="_blank">Add+</a></div> --}}
                <a href="{{url('add-product/'.$product->id)}}" class="btn" role="button">ADD +</a>
        </div>
    </div>

    <script src="{{asset('js/jquery-1.11.1.min.js')}}">
    </script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
