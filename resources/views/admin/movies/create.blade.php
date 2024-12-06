
@extends('layouts.admin')

@section('content')
    <h1>Create Movie</h1>

    <form action="{{ route('admin.movies.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Movie Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" id="release_date" name="release_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Movie</button>
    </form>
@endsection
