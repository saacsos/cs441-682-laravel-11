@extends('layouts.main')

@section('content')
    <section class="container mx-auto w-[80%]">
        <h1 class="text-2xl my-4">Artist List</h1>

        @can('create', \App\Models\Artist::class)
            <div class="my-2">
                <a href="{{ route('artists.create') }}" class="px-4 py-2 border bg-blue-200">
                    + New Artist
                </a>
            </div>
        @endcan

        <table class="table border-2 border-amber-600">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $artist->image_path }}</td>
                        <td>
                            <a href="{{ route('artists.show', ['artist' => $artist]) }}">
                                {{ $artist->name }}
                            </a>

                        </td>
                    </tr>

                @endforeach
            </tbody>


        </table>
    </section>

@endsection
