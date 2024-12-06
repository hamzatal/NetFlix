<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add your other necessary stylesheets here -->
</head>
<body>
    <div class="container">
        <header>
            <!-- You can add your header content here -->
            <h1>Admin Panel</h1>
        </header>

        <aside>
            <!-- You can add your sidebar or navigation content here -->
        </aside>

        <main>
            @yield('content') <!-- This is where your page content will go -->
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Add your other necessary JavaScript files here -->
</body>
</html>
