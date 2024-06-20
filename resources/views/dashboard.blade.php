{{-- resources/views/genres/index.blade.php --}}

@extends('adminlte::page')

@section('title', 'Genres')

@section('content_header')
    <h1>Genres</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Genre List</h3>
            {{-- <div class="card-tools">
                <a href="#" class="btn btn-success">Create New Genre</a>
                <a href="{{ route('genres.create') }}" class="btn btn-success">Create New Genre</a>
            </div> --}}
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Genre Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $genre['id'] }}</td>
                            <td>{{ $genre['genre_name'] }}</td>
                        <tr>
                    @endforeach
                    {{-- @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $genre->id }}</td>
                            <td>{{ $genre->name }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('genres.destroy', $genre->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@stop
