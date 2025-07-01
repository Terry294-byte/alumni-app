@extends('layouts.admin')

@section('title', 'Members')

@section('content')
    <h4 class="mb-3">Team Members</h4>
    <a href="{{ route('admin.members.create') }}" class="btn btn-primary mb-3">Add Member</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($members as $member)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->name }}</h5>
                        <p class="card-text text-muted">{{ $member->position }}</p>
                        <form method="POST" action="{{ route('admin.members.destroy', $member->id) }}">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
