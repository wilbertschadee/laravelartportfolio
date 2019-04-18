@extends('layouts.app')

@section('title', 'create project')

@section('content')

<div class="container">

<h1>een nieuw jaar toevoegen</h1>

<form method="POST" action="/admin/year">
    {{ csrf_field() }}
    
    <div class="form-group">
    <label for="year">jaar</label>
        <input type="text" class="form-control" name="year" placeholder="jaar">
    </div>
    <div>
        <label for="img_1">linkerafbeelding</label>
        @foreach($projects as $project)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="img_1" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
        
    </div>
    <div>
        <label for="img_2">middelse afbeelding</label>
    @foreach($projects as $project)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="img_2" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail form-check-label' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <label for="img_3">rechter afbeelding</label>
    @foreach($projects as $project)
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="img_3" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="\img/{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <button type="submit" class="btn btn-primary">project aanmaken</button>
    </div>
</form>
</div>

@endsection