@extends('layout')

@section('title', 'portfolio')

@section('content')
@foreach($homepage as $row)
    <a href="year/{{$row->year}}">
        <div class="year-row"> 
            <div class="row no-gutter year">
                <div class="col-4 padding-1">
                    <img src="{{ $row-> img_path_1}}" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="{{ $row->img_path_2}}" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="{{ $row-> img_path_3}}" class="img-responsive fit-img" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="text">{{$row->year}}</div>
            </div>
        </div>
    </a>
@endforeach

    <button onclick="topFunction()" id="buttonTop" title="Go to top"><i class="arrow up"></i></button> 

@endsection
    
