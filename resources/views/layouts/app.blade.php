<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic Article Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <style>
        :root {
            --primary: #1f3a5f;
            --primary-light: #2c5282;
            --bg: #f4f6f8;
            --card: #ffffff;
            --text: #1a202c;
            --muted: #6b7280;
            --border: #e5e7eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;

            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: #fff;
            padding: 28px 0;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 1.8rem;
            font-weight: 600;
        }

        nav a {
            position: relative;
            color: rgba(255,255,255,0.9);
            margin-right: 18px;
            text-decoration: none;
            font-size: 0.95rem;
            padding-bottom: 4px;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background: rgba(255,255,255,0.9);
            transition: width 0.25s ease, left 0.25s ease;
        }

        nav a:hover::after {
            width: 100%;
            left: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 0 20px;
        }

        main {
            padding: 40px 0;
            flex: 1;
        }

        .card {
            background: var(--card);
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        h2 {
            margin-top: 0;
            font-size: 1.3rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 8px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid var(--border);
        }

        li:last-child {
            border-bottom: none;
        }

        li a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        li a:hover {
            text-decoration: underline;
        }

        footer {
            background: #eef1f4;
            text-align: center;
            padding: 20px;
            color: var(--muted);
            font-size: 0.9rem;
            margin-top: 60px;
        }

        .card h3 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .card p.muted {
            color: var(--muted);
            font-size: 0.95rem;
            margin-bottom: 12px;
        }

        .subject-link {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
        }

        .subject-link:hover {
            text-decoration: underline;
        }

    </style>

</head>
<body>

<header>
    <div class="container">
        <h1>Academic Article Platform</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/browse">Browse</a>
            <a href="/subjects">Subjects</a>
            <a href="#">Search</a>
            <a href="/about">About</a>
        </nav>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    © 2026 Academic Research Platform
</footer>

</body>
</html>
