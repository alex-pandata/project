@extends('layout')

@section('content')
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Desctiption</th>
                <th></th>
            </tr>
        @foreach($projects as $project)
            <tr>
                <td>
                    {{$project->id}}
                </td>                <td>
                    {{$project->title}}
                </td>                <td>
                    {{$project->description}}
                </td>
                <td>
                    <a href="/projects/{{$project->id}}/edit">edit</a>
                </td>
            </tr>
        @endforeach
        </table>
@endsection