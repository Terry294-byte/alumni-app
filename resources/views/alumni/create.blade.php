@extends('layouts.app')

@section('content')
<h2>Add New Alumni</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('alumni.store') }}" method="POST">
    @csrf
    <label>Name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

    <label>Course:</label><br>
    <input type="text" name="course" value="{{ old('course') }}"><br><br>

    <label>Graduation Year:</label><br>
    <input type="date" name="graduation_year" id="graduation_year" value="{{ old('graduation_year') }}">
<br><br>

    <button type="submit">Save</button>
</form>
@endsection
