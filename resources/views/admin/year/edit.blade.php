@extends('layouts.app')

@section('title', 'edit project')

@section('content')

<div class="container">

<h1>een project aanpassen</h1>



<form method="POST" action="/admin/year/{{$years[0]->year}}">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    
    <div class="form-group">
    <label for="year">jaar</label>
        <input type="text" class="form-control" name="year" placeholder="jaar" value='{{$years[0]->year}}'>
    </div>
    <div>
        <label for="img_1">linkerafbeelding</label>
        @foreach($projects as $project)
        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="img_1" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
        
    </div>
    <div class="form-group">
        <label for="img_2">middelse afbeelding</label>
    @foreach($projects as $project)
        <div>
            <input type="checkbox" class="form-check-input" name="img_2" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <label for="img_3">rechter afbeelding</label>
    @foreach($projects as $project)
        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="img_3" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <button type="submit" class="btn btn-primary">project aanpassen</button>
    </div>
</form>

</div>

@endsection