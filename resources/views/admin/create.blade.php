@extends('layouts.app')

@section('title', 'create project')

@section('content')

<h1>een nieuw project toevoegen</h1>

<form method="POST" action="/admin/project" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="naam van het project">
    </div>
    <div>
        <textarea name="description" placeholder="beschrijving project"></textarea>
    </div>
    <div class="form-group">
        <label for="img_path">File input</label>
        <input data-preview="#preview" name="img_path" type="file" id="imageInput">
        <img class="col-sm-6" id="preview"  src="">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div>
        <input type="text" name="year" placeholder="jaar">
    </div>
    <div>
        <button type="submit">maak project</button>
    </div>
</form>

@endsection