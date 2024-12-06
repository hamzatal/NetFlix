<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>netflix</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)),
                url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f562aaf4-5dbb-4603-a32b-6ef6c2230136/dh0w8qv-9d8ee6b2-b41a-4681-ab9b-8a227560dc75.jpg/v1/fill/w_1280,h_720,q_75,strp/the_netflix_login_background__canada__2024___by_logofeveryt_dh0w8qv-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzIwIiwicGF0aCI6IlwvZlwvZjU2MmFhZjQtNWRiYi00NjAzLWEzMmItNmVmNmMyMjMwMTM2XC9kaDB3OHF2LTlkOGVlNmIyLWI0MWEtNDY4MS1hYjliLThhMjI3NTYwZGM3NS5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.LOYKSxIDqfPwWHR0SSJ-ugGQ6bECF0yO6Cmc0F26CQs') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        :root {
            --netflix-red: #e50914;
            --netflix-black: #141414;
            --netflix-dark-gray: #222222;
            --netflix-light-gray: #8c8c8c;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background-color: var(--netflix-black);
            min-height: 100vh;
            color: white;
        }


        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1.5rem 4rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.7) 0%, transparent 100%);
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--netflix-red);
            text-decoration: none;
        }

        .hero-content {
            max-width: 950px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #ffffff;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--netflix-red);
            color: white;
        }

        .btn-primary:hover {
            background: #f40612;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin-left: 1rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .feature-section {
            padding: 4rem 0;
            border-top: 8px solid var(--netflix-dark-gray);
        }

        .feature-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            padding: 0 2rem;
        }

        .feature-text {
            flex: 1;
        }

        .feature-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-desc {
            font-size: 1.25rem;
            color: var(--netflix-light-gray);
        }

        .feature-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .feature-image img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .nav {
                padding: 1rem;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.25rem;
            }

            .feature-container {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }

            .buttons {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .btn-secondary {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>


    <nav class="nav">
        <a href="/" class="logo">Netflix</a>
        @if (Route::has('login'))
        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
        @else
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn btn-primary">Sign In / Sign Up</a>
        </div>
        @endauth
        @endif
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Unlimited movies, TV shows, and more</h1>
            <p class="hero-subtitle">Watch anywhere. Cancel anytime.</p>
            @guest
            <a href="{{ route('login') }}" class="btn btn-primary">Get Started ></a>
            @endguest
        </div>
    </div>

    <!-- <section class="feature-section">
        <div class="feature-container">
            <div class="feature-text">
                <h2 class="feature-title">Enjoy on your TV</h2>
                <p class="feature-desc">Watch on Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</p>
            </div>
            <div class="feature-image">
                <img src="/api/placeholder/640/480" alt="TV streaming">
            </div>
        </div>
    </section> -->

    <!-- <section class="feature-section">
        <div class="feature-container">
            <div class="feature-image">
                <img src="/api/placeholder/640/480" alt="Mobile streaming">
            </div>
            <div class="feature-text">
                <h2 class="feature-title">Download your shows to watch offline</h2>
                <p class="feature-desc">Save your favorites easily and always have something to watch.</p>
            </div>
        </div>
    </section>

    <section class="feature-section">
        <div class="feature-container">
            <div class="feature-text">
                <h2 class="feature-title">Watch everywhere</h2>
                <p class="feature-desc">Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
            <div class="feature-image">
                <img src="/api/placeholder/640/480" alt="Multi-device streaming">
            </div>
        </div>
    </section> -->
</body>

</html>