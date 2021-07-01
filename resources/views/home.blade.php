@extends('layouts.app')
@section('title')
    {{ $title}}
@endsection
@section('content')
    @if(Auth::check())
        @if(!$tasks->count())
            Oops! No tasks available
        @else
            <ul style="list-style-type: square">
                @foreach($tasks as $task)
                    <li>
                        <p><b> {{$task->task_title}}</b> {{$task->created_at}}</p>
                        <p> <pre> {{$task->task_content}}</pre></p>
                    </li>
                @endforeach

            </ul>
        @endif

        <br>
        <br>
        <a href="{{route('tasks.create')}}" style="color: #1d68a7"> New Task</a>

    @else
        <p> <b style="color: #1f6fb2"> Please LOG IN to view your tasks.</b></p>
    @endif



@endsection
