@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8 max-w-3xl bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Edit Member</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $member->name) }}" required
                class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $member->email) }}" required
                class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="position" class="block text-gray-700 font-semibold mb-2">Position</label>
            <input type="text" name="position" id="position" value="{{ old('position', $member->position) }}"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="photo" class="block text-gray-700 font-semibold mb-2">Photo</label>
            @if ($member->photo)
                <img src="{{ asset('storage/' . $member->photo) }}" alt="Member Photo" class="mb-4 w-24 h-24 object-cover rounded-lg border border-gray-300">
            @endif
            <input type="file" name="photo" id="photo" accept="image/*"
                class="w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="flex items-center space-x-4">
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition duration-200 inline-block">Update Member</button>
            <a href="{{ route('admin.members.index') }}" class="text-gray-600 hover:text-gray-900">Cancel</a>
        </div>
    </form>
</div>
@endsection
