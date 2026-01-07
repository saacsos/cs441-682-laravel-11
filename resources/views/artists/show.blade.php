@extends('layouts.main')

@section('content')
    <h1 class="text-4xl">{{ $artist->name }}</h1>
    <h2>Image: {{ $artist->image_path }}</h2>

    <div class="flex">
        @can('update', $artist)
            <a href="{{ route('artists.edit', ['artist' => $artist]) }}"
               class="inline-block px-4 py-2 border m-4 bg-blue-300 cursor-pointer rounded-md"
            >
                Edit Artist
            </a>
        @endcan

        @can('delete', $artist)
            <form onsubmit="return confirm('Are you sure?')"
                action="{{ route('artists.destroy', ['artist' => $artist]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-block px-4 py-2 border m-4 bg-red-400 cursor-pointer rounded-md">
                    Delete this artist
                </button>
            </form>
        @endcan
    </div>


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
