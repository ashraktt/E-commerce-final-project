<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>edit category</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<body>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">edit category</h4>

                </div>

            </div>
            <div class="row">

                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            add category
                        </div>
                        <div class="panel-body">
                            <form  method="post" onSubmit="return valid();" action="{{url('categories/'.$item->id)}}">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" autocomplete="off"
                                        value="{{$item->name}}"
                                        required />
                                </div>



                                <button type="submit" name="signup" class="btn btn-danger pull-right"
                                    id="submit">save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->

    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
