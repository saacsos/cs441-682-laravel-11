@extends('layouts.main')

@section('content')
    <h1 class="text-4xl">{{ $artist->name }}</h1>
    <h2>Image: {{ $artist->image_path }}</h2>

    <section>
        <h3 class="text-2xl">Songs</h3>
        <ul>
            @foreach($artist->songs as $song)
                <li>
                    {{ $song->title }} ({{ $song->duration }} s.)
                </li>

            @endforeach
        </ul>
    </section>

@endsection
