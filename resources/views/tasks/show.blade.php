@extends('layout')
@section('content')

        <h4>Task at hand: {{$task->taskToDo}}</h4>
        Is to be done by: {{$task->toDoBy}}<br>
        Is it?: {{$task->isDone ? 'Yes' : 'No'}}<br>
        <form action="{{route('tasks.edit', $task->id)}}" method="GET">
            <button type="submit" class="btn btn-outline-primary">Edit</button>
            <a href="{{route('tasks.index')}}"><button class="btn btn-outline-dark" type="button">Back</button></a>
        </form>

@endsection