@extends('layouts.main')

@section('content')

    <h1 class="text-3xl">Edit Artist</h1>

    <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            @error('name')
            <p class="text-red-500 text-sm">
                {{ $message }}
            </p>
            @enderror
            <input
                type="text"
                name="name"
                id="name"
                class="border border-gray-900 p-2 @error('name') border-4 border-red-500 @enderror"
                value="{{ old('name', $artist->name) }}"
            >
        </div>

        <div>
            <button
                type="submit"
                class="border rounded-sm p-2 bg-blue-200 cursor-pointer"
            >
                Update Artist
            </button>
        </div>

    </form>

@endsection
