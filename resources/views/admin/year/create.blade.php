@extends('layouts.app')

@section('title', 'create project')

@section('content')

<h1>een nieuw project toevoegen</h1>

<form method="POST" action="/admin/year">
    {{ csrf_field() }}
    
    <div>
    <label for="year">jaar</label>
        <input type="text" name="year" placeholder="jaar">
    </div>
    <div>
        <label for="img_1">linkerafbeelding</label>
        @foreach($projects as $project)
        <div class="">
            <input type="checkbox" name="img_1" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="{{$project->img_path}}"/>
        </div>
        @endforeach
        
    </div>
    <div>
        <label for="img_2">middelse afbeelding</label>
    @foreach($projects as $project)
        <div>
            <input type="checkbox" name="img_2" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <label for="img_3">rechter afbeelding</label>
    @foreach($projects as $project)
        <div class="">
            <input type="checkbox" name="img_3" valeu="{{$project->img_path}}"/>
            <img class='fit-img thumbnail' src="{{$project->img_path}}"/>
        </div>
        @endforeach
    </div>
    <div>
        <button type="submit">project aanmaken</button>
    </div>
</form>
</form>

@endsection