@extends('layout')
@section('content')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="row">
        <div class="col col-md-6">
            <h3>Task list</h3>
            <table class="table table-striped table-active">
                <thead>
                    <td>Task</td>
                    <td>To do by</td>
                    <td>Is Done?</td>
                    <td></td>
                    <td></td>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->taskToDo}}</td>
                            <td>{{$task->toDoBy}}</td>
                            <td>{{($task->isDone) ? 'yes' : 'no'}}</td>
                            <td>
                                <form action="{{route('tasks.edit', $task->id)}}" method="GET">
                                    <button type="submit" class="btn btn-outline-primary">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('tasks.create') }}"><button class="btn btn-primary" type="button">New Task</button></a>


@endsection