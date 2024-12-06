<!-- resources/views/admin/genres/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Genres</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Genre Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <a href="{{ route('admin.genres.edit', $genre->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.genres.create') }}" class="btn btn-success">Add Genre</a>
</body>
</html>
