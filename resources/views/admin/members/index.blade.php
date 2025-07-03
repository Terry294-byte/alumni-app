@extends('layouts.admin')

@section('title', 'Members')

@section('content')
    <div class="container py-4">
        <h4 class="mb-4">Team Members</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('admin.members.create') }}" class="btn btn-primary mb-4">Add Member</a>

        <div class="row">
            @forelse($members as $member)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Member Photo">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $member->name }}</h5>
                            <p class="card-text text-muted">{{ $member->position }}</p>
                            <p class="card-text"><small class="text-muted">{{ $member->email }}</small></p>

                            <div class="d-flex">
                                <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                              <!--  Correct -->
<form method="POST" action="{{ route('admin.members.destroy', $member->id) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
</form>


                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">No members added yet.</div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
