@extends('layout')
@section('content')

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="row">
        <h2>New Task:</h2>
    </div>
    <div class="row">
        <form action="{{route('tasks.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="taskToDo">Task:</label>
                <input type="text" class="form-control" name="taskToDo" placeholder="Generic Task">
                <label for="toDoBy">To be done by:</label>
                <input type="date" class="form-control" name="toDoBy">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Task</button>
                <a href="{{route('tasks.index')}}"><button class="btn btn-light" type="button">Back</button></a>
            </div>
        </form>
    </div>

@endsection