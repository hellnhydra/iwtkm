

<!-- resources/views/admin/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Conferences</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($conferences) && count($conferences) > 0)
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->id }}</td>
                    <td>{{ $conference->name }}</td>
                    <td>{{ $conference->description }}</td>
                    <td>
                        <a href="{{ route('conferences.edit', $conference->id) }}">Edit</a>
                        <!-- You can also add a "Delete" link here if needed -->
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No conferences found.</td>
            </tr>
        @endif
    </tbody>
</table>

<a href="{{ route('conferences.create') }}">Create New Conference</a>
@endsection