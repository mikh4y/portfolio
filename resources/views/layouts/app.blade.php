<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mikhaella De Castro - Portfolio' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/mikha-logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <a href="/" class="logo">Mikhaella E. De Castro</a>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </div>
        <button class="mobile-menu-btn" type="button" aria-label="Open navigation">
            ☰
        </button>
    </nav>
    @yield('content')
</body>
</html>
