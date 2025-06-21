@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">🎓 All Alumni</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('alumni.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Add New Alumni
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover shadow-sm border rounded">
            <thead class="table-dark">
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
                @forelse($alumni as $alum)
                    <tr>
                        <td>{{ $alum->name }}</td>
                        <td>{{ $alum->email }}</td>
                        <td>{{ $alum->phone }}</td>
                        <td>{{ $alum->course }}</td>
                        <td>{{ $alum->graduation_year }}</td>
                        <td>
                            <form action="{{ route('alumni.destroy', $alum->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this alumni?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash3-fill"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No alumni found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
