<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic Article Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #fafafa; }
        header { background: #003f7f; color: #fff; padding: 20px; }
        header a { color: #fff; margin-right: 15px; text-decoration: none; }
        .container { max-width: 1100px; margin: auto; padding: 20px; }
        h2 { margin-top: 40px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        ul { list-style: none; padding: 0; }
        li { padding: 6px 0; }
        footer { background: #eee; text-align: center; padding: 15px; margin-top: 60px; }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>Academic Article Platform</h1>
        <nav>
            <a href="/">Home</a>
            <a href="#">Browse</a>
            <a href="#">Subjects</a>
            <a href="#">Search</a>
            <a href="#">About</a>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    © 2026 Academic Research Platform
</footer>

</body>
</html>
