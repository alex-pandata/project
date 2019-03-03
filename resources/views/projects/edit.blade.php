@extends('layout')

@section('body_title', 'Editing')
@section('body_subtitle', 'form for edit projects')
@section('title', 'Pandata — Editing')

@section('content')
    <form method="post" action="/projects/{{ $project->id }}">

        {{ csrf_field() }}

        {{ method_field('PATCH') }}

        <div class="field">
            <label class="label" for="title">title</label>
            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{ $project->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Update Proejct</button>
            </div>
        </div>

    </form>

    <form method="post" action="/projects/{{ $project->id }}">
        {{ csrf_field() }}

        {{ method_field('DELETE') }}

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-danger">Delete Project</button>
            </div>
        </div>
    </form>
@endsection