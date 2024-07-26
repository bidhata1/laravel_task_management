@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }} </p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <h3>Tasks</h3>
    <ul>
        @foreach($user->tasks as $task)
            <li>{{ $task->title }} - {{ $task->status }}</li>
        @endforeach
    </ul>
</div>
@endsection
