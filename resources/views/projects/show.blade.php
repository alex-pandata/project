@extends('layout')

@section('body_title', 'Show')
@section('body_subtitle')
    Here is the project #{{ $project->id }} — {{ $project->title }}
@endsection
@section('title', 'Pandata — Show project')

@section('content')
    <div class="container">
        {{ $project->description }}
    </div>
@endsection