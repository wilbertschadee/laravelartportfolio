@extends('layout')

@section('title',)

@section('content')

    <h3 class="text-center text-muted">@foreach($projects as $project)   
    @if ($loop->first)
   {{$project->year}} 
   @endif 
   @endforeach</h3>

    <div class="w-100 p-0 m-0 mh-100">
        <div class="row no-gutter">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($projects as $project)
                    @if ($loop->first)
                    <li data-target="#carouselExampleIndicators active" data-slide-to="{{$project->id}}"></li>
                    @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$project->id}}"></li>
                    @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                @foreach($projects as $project)
                    @if ($loop->first) 
                    <div class="active carousel-item">
                    @else
                    <div class="carousel-item">
                    @endif
                        <div class="row no-gutter justify-content-around">
                            <div class="col-sm-5 padding-1">
                                <img class="d-block w-100 fit-img" src="{{$project->img_path}}" alt="First slide">
                            </div>
                            <div class="col-sm-5 padding-1 carousel-text">
                            {{$project->description}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


@endsection