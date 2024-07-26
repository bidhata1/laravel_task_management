@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Online Status</th>
                <th>Total Tasks Completed</th>
                <th>Total Tasks In Progress</th>
                <th>Total Tasks To Do</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{ route('users.show', $user->id) }}">{{ $user->firstname }} {{ $user->lastname }}</a></td>
                    <td>{{ $user->online_status }}</td>
                    <td>{{ $user->total_tasks_completed }}</td>
                    <td>{{ $user->total_tasks_in_progress }}</td>
                    <td>{{ $user->total_tasks_to_do }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
