<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Blog</title> <!-- placeholder for title -->
</head>
<body>
    <header>
        <h1>My Blog</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>  
        <hr>
    </header>
    <main>
        @yield('content')  <!-- placeholder for each page main content -->
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
    </footer>
</body>
</html>

