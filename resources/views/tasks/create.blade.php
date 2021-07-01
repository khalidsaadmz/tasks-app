@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <h3> Task Details: </h3>

    <form action="/tasks" method="POST" >

        <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="form-group">
            <label>Task Title</label>
            <input type="text" class="form-control" name="task_title" id="task_title">
        </div>

        <div class="form-group">
            <label>Task Description</label>
            <input type="text" class="form-control" name="task_content" id="task_content">
        </div>

        <div class="form-group">
            <label>User Id</label>
            <input type="text" class="form-control" name="u_id" id="u_id">
        </div>

        <input type="submit" name="send" value="Create" class="btn btn-dark btn-block">
    </form>



        <a href="{{route('tasks.index')}}">Home</a>


@endsection

