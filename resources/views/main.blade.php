@extends('layout.home')
@section('slideshow')
@if(!isset($category_id))
<div class="row">
    <div class="col-xs-12">
        <div class="slidshow">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('images/10.jpg')}}">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{asset('images/14.png')}}">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('images/11.png')}}">

                </div>
                <span style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </span>
            </div>




        </div>
    </div>
</div>
@endif
@endsection
@section('tablist')
<div class="row" style="margin-bottom: 20px;">
    <div class="col-xs-12">
        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
            <li role="presentation" @if(!isset($category_id)) class="active" @endif><a href="{{url('main')}}">Home</a>
            </li>
            @foreach ($categories as $category)
            <li role="presentation" @if(isset($category_id) && $category_id==$category->id) class="active" @endif><a
                    href="{{url('show-categories/'.$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('content')


<div class="col-xs-12">
    <div class="oscontent">

        <div class="row">

            @foreach ($products as $item)
            @if($item->quantity > 0)
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img class="oscontentimg" src="{{asset($item->image)}}" alt="..." width="300" height="300">
                    <div class="caption">
                        <h3>{{$item->name}}</h3>
                        {{-- <p>{{$item->description}}</p> --}}
                        <p><a href="{{url('add-product/'.$item->id)}}" class="btn btn-primary" role="button">ADD +</a>
                            <a href="{{url('show-product/'.$item->id)}}" class="btn btn-default" role="button">Show</a></p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach






        </div>
    </div>

</div>

@endsection
@section('js')
js/myjs.js
@endsection
