<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Page</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Admin & username : {{isset(Auth::user()->name) ? Auth::user()->name : " "}} </h4>


                    <a href="{{url('/')}}" role="button">home</a>
                    <a href="{{url('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">logout</a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage categories
                            <a href="{{url('/categories/create')}}" role="button" > add</a>
                            <a href="{{url('/categories')}}" role="button" style="
                            position: absolute;
                            right:150px;


                            margin: 0 30%;
                            ">categories</a>

                            <a href="{{url('/products')}}" role="button" style="
                               position: absolute;
                               right:150px;

                              ">products</a>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                {{-- <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Search</button>
                                                </span> --}}

                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                            <tr class="odd gradeX">
                                                <td class="center">{{$item->id}}</td>
                                                <td class="center">{{$item->name}}</td>

                                                <td class="center">

                                                    <a href="{{url('delete-category/'.$item->id)}}"><button
                                                        class="btn btn-danger">Delete</button></a>


                                                        <a href="{{url('categories/'.$item->id.'/edit')}}">   <button class="btn btn-primary">Edit</button>

                                                        </a>
                                                </td>
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



        </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->

    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>
