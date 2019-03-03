@extends('layout')

@section('content')
    <h1>Create a Project</h1>
    <form method="post" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title">
        </div>
        <div>
            <textarea name="description"></textarea>
        </div>
        <button>Submit</button>
    </form>
@endsection