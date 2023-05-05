@extends('layout')

@section('content')

    @if ($listing == null)
        <p>No listing found</p>
    @else
        <h2>{{ $listing['title'] }}</h2>
        <p>{{ $listing['description'] }}</p>
    @endif

    <a href="/"><p>Back to homepage</p></a>

@endsection
