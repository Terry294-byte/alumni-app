@extends('layouts.app')

@section('content')
<h1>Gallery</h1>
<p>A collection of moments from past alumni meetups and events.</p>

<div style="display: flex; flex-wrap: wrap; gap: 15px;">
    @for($i = 1; $i <= 6; $i++)
        <img src="https://via.placeholder.com/150?text=Photo+{{ $i }}" alt="Gallery image {{ $i }}" style="border-radius: 8px;">
    @endfor
</div>
@endsection
