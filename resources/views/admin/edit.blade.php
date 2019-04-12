@extends('layout')

@section('title', 'edit project')

@section('content')

<h1>een project aanpassen</h1>

<form method="POST" action="/admin">
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
        <button type="submit">project aanpassen</button>
    </div>
</form>

@endsection