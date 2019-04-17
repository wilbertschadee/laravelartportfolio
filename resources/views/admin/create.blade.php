@extends('layouts.app')

@section('title', 'create project')

@section('content')

<h1>een nieuw project toevoegen</h1>

<form method="POST" action="/admin/project">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="naam van het project">
    </div>
    <div>
        <textarea name="description" placeholder="beschrijving project"></textarea>
    </div>
    <div>
        <input type="text" name="img_path" placeholder='image path'>
    </div>
    <div>
        <input type="text" name="year" placeholder="jaar">
    </div>
    <div>
        <button type="submit">maak project</button>
    </div>
</form>

@endsection