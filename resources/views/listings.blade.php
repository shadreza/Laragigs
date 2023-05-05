@extends('layout')

@section('content')

    <h1>{{ $heading }}</h1>

    @if (count($listings) == 0)
        <p>No listings found</p>
    @else
        @foreach ($listings as $listing)
            <a href="/listings/{{$listing['id']}}">
                <h2>{{ $listing['title'] }}</h2>
            </a>
                <p>{{ $listing['description'] }}</p>
        @endforeach
    @endif

@endsection
