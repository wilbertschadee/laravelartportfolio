@extends('layouts.app')

@section('title', 'adminpage')

@section('content')
<div class="container">
    
<h3 class="text-center text-muted">projecten</h3>

    <table class="table table-striped">
    @foreach($projects as $project)
        <tr class=height-10>
            <th><img class="fit-img thumbnail" src="\img/{{$project->img_path}}" alt=""></th>
            <th>{{$project->title}}</th>
            <th>{{$project->year}}</th>
            <th><a href="\admin/project/{{$project->id}}/edit">edit</a></th>
            <th>
                <form method="POST" action="/admin/project/{{$project->id}}">
                {{method_field('delete')}}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-link p-0 font-weight-bold">delete</button>
                </form>
                </th>
        </tr>
    @endforeach
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><a href="\admin/project/create">maak project</a></th>
        </tr>
    </table>

    <h3 class="text-center text-muted">frontpage</h3>
    <table class="table table-striped">
    @foreach($homepage as $year)
        <tr class=height-10>
            <th>{{$year->year}}</th>
            <th><img class="fit-img thumbnail" src="{{$year->img_path_1}}" alt=""></th>
            <th><img class="fit-img thumbnail" src="{{$year->img_path_2}}" alt=""></th>
            <th><img class="fit-img thumbnail" src="{{$year->img_path_3}}" alt=""></th>
            <th><a href="/admin/year/{{$year->year}}/edit">edit</a></th>
        </tr>
    @endforeach
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><a href="/admin/year/create">maak new jaar</a></th>
        </tr>
    </table>
</div>
@endsection