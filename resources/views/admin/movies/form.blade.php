<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold">{{ isset($movie) ? 'Edit Movie' : 'Add New Movie' }}</h2>
    </div>

    <form action="{{ isset($movie) ? route('admin.movies.update', $movie) : route('admin.movies.store') }}" method="POST" class="space-y-6">
        @csrf
        @if(isset($movie))
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 gap-6">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $movie->title ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                @error('title')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $movie->description ?? '') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Genre -->
            <div>
                <label for="genre_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Genre</label>
                <select name="genre_id" id="genre_id" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Select a genre</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}" {{ (old('genre_id', $movie->genre_id ?? '') == $genre->id) ? 'selected' : '' }}>
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
                @error('genre_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Categories -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Categories</label>
                <div class="mt-2 space-y-2">
                    @foreach($categories as $category)
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                    {{ (isset($movie) && $movie->categories->contains($category->id)) ? 'checked' : '' }}
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label class="text-gray-700 dark:text-gray-300">{{ $category->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                @error('categories')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}