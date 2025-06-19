@extends('layouts.app')

@section('content')
<h2>All Alumni</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif


<a href="{{ route('alumni.create') }}" style="
    display: inline-block;
    background-color: #0d6efd;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 15px;
">
    + Add New Alumni
</a>

<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px; width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Graduation Year</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumni as $alum)
            <tr>
                <td>{{ $alum->name }}</td>
                <td>{{ $alum->email }}</td>
                <td>{{ $alum->phone }}</td>
                <td>{{ $alum->course }}</td>
                <td>{{ $alum->graduation_year }}</td>
                <td>
                    <form action="{{ route('alumni.destroy', $alum->id) }}" method="POST" onsubmit="return confirm('Delete this alumni?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
