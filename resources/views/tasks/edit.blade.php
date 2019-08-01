@extends('layout')
@section('content')

    @if($errors->any())
        Errors:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="row">
        <h2>Editing task "{{$task->taskToDo}}"</h2>
    </div>
    <div class="row">
        <form method="POST" action="{{route('tasks.update', $task->id)}}">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="taskToDo">Task:</label>
                <input type="text" class="form-control" name="taskToDo" value="{{$task->taskToDo}}">
                <label for="toDoBy">To be done by:</label>
                <input type="date" class="form-control" name="toDoBy" value="{{$task->toDoBy}}">
                <label for="isDone">Is Done?:</label>
                <input type="checkbox" class="form-control" name="isDone" {{$task->isDone ? 'checked' : ''}}>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="{{route('tasks.index')}}"><button class="btn btn-light" type="button">Back</button></a>
            </div>

        </form>
    </div>

@endsection