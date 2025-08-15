<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') - My Blog</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #222;
      --accent: #ff6f61;
      --background: #fafafa;
      --text: #333;
    }

    body {
      font-family: "Inter", sans-serif;
      background: var(--background);
      color: var(--text);
      margin: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: var(--primary);
      color: white;
      padding: 2rem 1.5rem;
      text-align: center;
    }

    header h1 {
      font-family: "Merriweather", serif;
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin: 0;
      padding: 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: var(--accent);
    }

    main {
      flex: 1;
      max-width: 850px;
      margin: 2.5rem auto;
      padding: 0 1.5rem;
      line-height: 1.8;
    }

    main h2, main h3 {
      font-family: "Merriweather", serif;
      margin-top: 2rem;
      margin-bottom: 1rem;
      color: var(--primary);
    }

    main p {
      margin-bottom: 1.2rem;
      font-size: 1.05rem;
    }

    footer {
      background: var(--primary);
      color: #ddd;
      text-align: center;
      padding: 1.2rem;
      font-size: 0.9rem;
      margin-top: auto;
    }

    footer p {
      margin: 0;
    }

    /* Mobile */
    @media (max-width: 700px) {
      nav ul {
        flex-direction: column;
        gap: 1rem;
      }
      header h1 {
        font-size: 2rem;
      }
    }
  </style>
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
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
  </footer>
</body>
</html>
