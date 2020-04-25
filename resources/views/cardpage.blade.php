<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link rel='stylesheet' href="css/mystayel.css" />
    <!-- CUSTOM STYLE  -->

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
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

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="nav navbar-nav navbar-right">
                            @if(! isset( Auth::user()->id) )
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('user-login')}}">User</a></li>
                                    <li><a href="{{url('admin-login')}}">Admin</a></li>

                                </ul>
                            </li>
                            <ul class="nav navbar-nav">
                                <li><a href="{{url('signup')}}">Sign Up</a></li>
                            </ul>
                            @else
                            <li class="dropdown">
                            <a href="{{url('main')}}" role="button">{{Auth::user()->name}} </a> </li> <li><a
                                            href="{{url('logout')}}" onclick="event.preventDefault();
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
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Products
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <div class="row">


                                    </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->

                            <thead>
                                <tr>
                                    <th>image</th>

                                    <th>Quantity</th>
                                    <th>price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $item)
                                <tr class="odd gradeX">
                                    <td class="center"><img src="{{asset($item->product->image)}}" width="300" height="300"></td>
                                    <td class="center">{{$item->quantity}}</td>
                                    <td class="center">{{$item->product->price}}</td>
                                    <td class="center"><a class="btn btn-danger pull-right" href="{{url('delete-card/'.$item->id)}}">delete </a></td>


                                </tr>
                                @endforeach


                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2 col-xs-offset-5">
                <a class="btn" href="#." target="_blank">Buy Now</a>

            </div>


        </div>

    </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->

</body>

</html>
