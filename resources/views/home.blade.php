<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>netFlix - Watch Movies Online</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background-color: #141414;
            color: #fff;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1rem 4%;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.7) 10%, transparent);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s;
        }

        .navbar.scrolled {
            background-color: #141414;
        }

        .logo {
            color: #e50914;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #e50914;
        }

        .hero {
            position: relative;
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('/api/placeholder/1920/1080') center/cover;
            display: flex;
            align-items: center;
            padding: 0 4%;
        }

        .hero-content {
            max-width: 600px;
            margin-top: 60px;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: #e50914;
            color: white;
        }

        .btn-secondary {
            background-color: rgba(109, 109, 110, 0.7);
            color: white;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .section {
            padding: 2rem 4%;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .movie-row {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            padding: 1rem 0;
            scrollbar-width: none;
        }

        .movie-row::-webkit-scrollbar {
            display: none;
        }

        .movie-card {
            flex: 0 0 auto;
            width: 250px;
            transition: transform 0.3s;
            position: relative;
            cursor: pointer;
        }

        .movie-card:hover {
            transform: scale(1.05);
        }

        .movie-card img {
            width: 100%;
            height: 141px;
            object-fit: cover;
            border-radius: 4px;
        }

        .movie-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
            opacity: 0;
            transition: opacity 0.3s;
        }

        .movie-card:hover .movie-info {
            opacity: 1;
        }

        .movie-title {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .movie-meta {
            font-size: 0.8rem;
            color: #aaa;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .movie-card {
                width: 200px;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo">netFlix</a>
        <div class="nav-links">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-secondary">Logout</button>
            </form>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Inception</h1>
            <p class="hero-description">
                A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.
            </p>
            <div class="hero-buttons">
                <button class="btn btn-primary">▶ Play</button>
                <button class="btn btn-secondary">ℹ More Info</button>
            </div>
        </div>
    </div>

    <section class="section">
        <h2 class="section-title">Trending Now</h2>
        <div class="movie-row">
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 1">
                <div class="movie-info">
                    <h3 class="movie-title">The Dark Knight</h3>
                    <div class="movie-meta">2008 • Action • 2h 32m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 2">
                <div class="movie-info">
                    <h3 class="movie-title">Pulp Fiction</h3>
                    <div class="movie-meta">1994 • Crime • 2h 34m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 3">
                <div class="movie-info">
                    <h3 class="movie-title">The Matrix</h3>
                    <div class="movie-meta">1999 • Sci-Fi • 2h 16m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 4">
                <div class="movie-info">
                    <h3 class="movie-title">Interstellar</h3>
                    <div class="movie-meta">2014 • Sci-Fi • 2h 49m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 5">
                <div class="movie-info">
                    <h3 class="movie-title">Fight Club</h3>
                    <div class="movie-meta">1999 • Drama • 2h 19m</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Popular on MovieFlix</h2>
        <div class="movie-row">
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 6">
                <div class="movie-info">
                    <h3 class="movie-title">The Shawshank Redemption</h3>
                    <div class="movie-meta">1994 • Drama • 2h 22m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 7">
                <div class="movie-info">
                    <h3 class="movie-title">Goodfellas</h3>
                    <div class="movie-meta">1990 • Crime • 2h 26m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 8">
                <div class="movie-info">
                    <h3 class="movie-title">The Godfather</h3>
                    <div class="movie-meta">1972 • Crime • 2h 55m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 9">
                <div class="movie-info">
                    <h3 class="movie-title">Forrest Gump</h3>
                    <div class="movie-meta">1994 • Drama • 2h 22m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 10">
                <div class="movie-info">
                    <h3 class="movie-title">The Silence of the Lambs</h3>
                    <div class="movie-meta">1991 • Thriller • 1h 58m</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">New Releases</h2>
        <div class="movie-row">
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 11">
                <div class="movie-info">
                    <h3 class="movie-title">Dune</h3>
                    <div class="movie-meta">2021 • Sci-Fi • 2h 35m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 12">
                <div class="movie-info">
                    <h3 class="movie-title">No Time to Die</h3>
                    <div class="movie-meta">2021 • Action • 2h 43m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 13">
                <div class="movie-info">
                    <h3 class="movie-title">The Batman</h3>
                    <div class="movie-meta">2022 • Action • 2h 56m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 14">
                <div class="movie-info">
                    <h3 class="movie-title">Top Gun: Maverick</h3>
                    <div class="movie-meta">2022 • Action • 2h 11m</div>
                </div>
            </div>
            <div class="movie-card">
                <img src="/api/placeholder/250/141" alt="Movie 15">
                <div class="movie-info">
                    <h3 class="movie-title">Everything Everywhere All at Once</h3>
                    <div class="movie-meta">2022 • Action • 2h 19m</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Add hover effect for movie cards
        const movieCards = document.querySelectorAll('.movie-card');
        movieCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                const info = card.querySelector('.movie-info');
                info.style.opacity = '1';
            });

            card.addEventListener('mouseleave', () => {
                const info = card.querySelector('.movie-info');
                info.style.opacity = '0';
            });
        });
    </script>
</body>

</html>
