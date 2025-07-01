@extends('layouts.admin')

@section('title', 'Add Member')

@section('content')
    <h4>Add New Member</h4>

    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input name="email" type="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Position (optional)</label>
            <input name="position" class="form-control">
        </div>
        <div class="mb-3">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <button class="btn btn-success">Add Member</button>
    </form>
@endsection
