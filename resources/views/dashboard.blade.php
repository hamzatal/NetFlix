<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
            <nav x-data="{ open: false }" class="space-x-4">
                <a href="{{ route('admin.movies.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Movies</a>
                <a href="{{ route('admin.genres.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Genres</a>
                <a href="{{ route('admin.categories.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Categories</a>
                <a href="{{ route('admin.actors.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Actors</a>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{-- Main content area --}}
                    @if(request()->routeIs('admin.movies.*'))
                        @include('admin.movies.index')
                    @elseif(request()->routeIs('admin.genres.*'))
                        @include('admin.genres.index')
                    @elseif(request()->routeIs('admin.categories.*'))
                        @include('admin.categories.index')
                    @elseif(request()->routeIs('admin.actors.*'))
                        @include('admin.actors.index')
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Movies Card -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                <h3 class="text-lg font-semibold mb-2">Movies</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Manage your movie listings</p>
                                <a href="{{ route('admin.movies.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Manage Movies
                                </a>
                            </div>

                            <!-- Genres Card -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                <h3 class="text-lg font-semibold mb-2">Genres</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Organize movies by genres</p>
                                <a href="{{ route('admin.genres.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Manage Genres
                                </a>
                            </div>

                            <!-- Categories Card -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                <h3 class="text-lg font-semibold mb-2">Categories</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Manage movie categories</p>
                                <a href="{{ route('admin.categories.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Manage Categories
                                </a>
                            </div>

                            <!-- Actors Card -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                <h3 class="text-lg font-semibold mb-2">Actors</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Manage movie cast</p>
                                <a href="{{ route('admin.actors.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Manage Actors
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>