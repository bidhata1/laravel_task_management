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
                    <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->online_status ? 'Online' : 'Offline' }}</td>
                    <td>{{ $user->tasks->where('status', 'completed')->count() }}</td>
                    <td>{{ $user->tasks->where('status', 'in-progress')->count() }}</td>
                    <td>{{ $user->tasks->where('status', 'to-do')->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
