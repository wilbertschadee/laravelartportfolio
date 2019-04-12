@extends('layout')

@section('title', 'portfolio')

@section('content')
    <a href="year/2019">
        <div class="year-row"> 
            <div class="row no-gutter year">
                <div class="col-4 padding-1">
                    <img src="{{ $projects[0]-> img_path}}" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="{{ $projects[1]-> img_path}}" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="{{ $projects[2]-> img_path}}" class="img-responsive fit-img" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="text">2019</div>
            </div>
        </div>
    </a>

    <a href="year/2018">
        <div class="year-row"> 
            <div class="row no-gutter year">
                <div class="col-4 padding-1">
                    <img src="img/2018/21.02.18.jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2018/dsfd.jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2018/0759_001-2[1434].jpg" class="img-responsive fit-img" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="text">2018</div>
            </div>
        </div>
    </a>

    <a href="2017.html">
        <div class="year-row"> 
            <div class="row no-gutter year">
                <div class="col-4 padding-1">
                    <img src="img/2017/img20170903_15085645 (2).jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2017/img20170903_15102879 (2).jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2017/img20171125_22403969 (2).jpg" class="img-responsive fit-img" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="text">2017</div>
            </div>
        </div>
    </a>

    <a href="2016.html">
        <div class="year-row"> 
            <div class="row no-gutter year">
                <div class="col-4 padding-1">
                    <img src="img/2016/etrehtr.jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2016/IMG-20161024-WA0000.jpg" class="img-responsive fit-img" alt="">
                </div>
                <div class="col-4 padding-1">
                    <img src="img/2016/hhbgl.jpg" class="img-responsive fit-img" alt="">
                </div>
            </div>
            <div class="middle">
                <div class="text">2016</div>
            </div>
        </div>
    </a>

    <button onclick="topFunction()" id="buttonTop" title="Go to top"><i class="arrow up"></i></button> 

@endsection
    
