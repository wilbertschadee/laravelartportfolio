@extends('layouts.app')

@section('title', 'edit project')

@section('content')

<div class="container">
<h1>een project aanpassen</h1>

<img src="\img/{{$project->img_path}}" class="img-thumbnail img-fit" alt="" srcset="">

<form method="POST" action="/admin/project/{{$project->id}}">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <div class='form-group'>
        <label for="title">naam van het project</label>
        <input type="text" class="form-control" name="title" placeholder="naam van het project" value="{{$project->title}}">
    </div>
    <div class='form-group'>
        <label for="description">beschrijving van het project</label>
        <textarea name="description" class="form-control" placeholder="beschrijving project">{{$project->description}}</textarea>
    </div>
    <div class='form-group'>
        <label for="year">jaar</label>
        <input type="text" name="year" class="form-control" placeholder="jaar" value="{{$project->year}}">
    </div>
    <div class="invisible">
        <input type="text" name="img_path" value="{{$project->img_path}}">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">project aanpassen</button>
    </div>

</form>

</div>

@endsection