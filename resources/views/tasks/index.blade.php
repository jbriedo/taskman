@extends('layout')
@section('content')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="row">
        <div class="col">
            <h3>Task list</h3>
            <table class="table table-dark">
                <thead>
                    <td>Task</td>
                    <td>To do by</td>
                    <td>Is Done?</td>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->taskToDo}}</td>
                            <td>{{$task->toDoBy}}</td>
                            <td>{{$task->isDone ? 'yes' : 'no'}}</td>
                            <td>
                                <form action="{{route('tasks.edit', $task->id)}}" method="GET">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{route('tasks.create')}}"><button class="btn btn-outline-primary" type="button">New Task</button></a>

@endsection