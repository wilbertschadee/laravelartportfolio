@extends('layouts.app')

@section('title', 'edit project')

@section('content')

<h1>een project aanpassen</h1>

<form method="POST" action="/admin/project/{{$project->id}}">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="naam van het project" value="{{$project->title}}">
    </div>
    <div>
        <textarea name="description" placeholder="beschrijving project">{{$project->description}}</textarea>
    </div>
    <div>
        <input type="text" name="img_path" placeholder='image path' value="{{$project->img_path}}">
    </div>
    <div>
        <input type="text" name="year" placeholder="jaar" value="{{$project->year}}">
    </div>
    <div>
        <button type="submit">project aanpassen</button>
    </div>
</form>

@endsection