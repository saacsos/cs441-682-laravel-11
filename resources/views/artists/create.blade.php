@extends('layouts.main')

@section('content')

    <h1 class="text-3xl">Create New Artist</h1>

    <form action="{{ route('artists.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="border border-gray-900 p-2"
            >
        </div>

        <div>
            <button
                type="submit"
                class="border rounded-sm p-2 bg-blue-200 cursor-pointer"
            >
                Add Artist
            </button>
        </div>

    </form>

@endsection
