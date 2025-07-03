@extends('layouts.admin')

@section('content')
	<div class="container">
		<h1>About Us</h1>
		@if(session('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif

		@if(isset($about))
			<h2>{{ $about->title }}</h2>
			<p>{{ $about->description }}</p>
			@if($about->image)
				<img src="{{ asset('storage/' . $about->image) }}" alt="About Image" style="max-width: 300px;">
			@endif
		@else
			<p>No About Us information found.</p>
		@endif

		<a href="{{ route('admin.about.create') }}" class="btn btn-primary mt-3">Create About Us</a>
	</div>
@endsection