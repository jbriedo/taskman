@extends('layout')
@section('content')
    <div class="row">
        <h2>Tasks Manager</h2>
    </div>
    <div class="row">
        <a href="{{ route('tasks.index') }}"><button class="btn btn-outline-primary" type="button">View</button></a>
        <a href="{{ route('tasks.create') }}"><button class="btn btn-outline-success" type="button">Create</button></a>
    </div>

@endsection