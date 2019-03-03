@extends('layout')

@section('body_title', 'Create')
@section('body_subtitle')
  Here you can create project
@endsection
@section('title', 'Pandata — Create project')

@section('content')
    <h1>Create a Project</h1>
    <form method="post" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">title</label>
            <div class="control">
                <input class="input" name="title" class="text">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">description</label>
            <div class="control">
                <textarea name="description" class="textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary">Create project</button>
            </div>
        </div>

    </form>
@endsection