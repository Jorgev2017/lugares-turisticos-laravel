<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lugares Turísticos de El Salvador</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F2F2F4; /* gris claro */
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #393E46; /* gris oscuro */
        }
        .navbar-brand {
            color: #FFAE00 !important; /* amarillo-naranja */
            font-weight: bold;
        }
        .nav-link {
            color: #AAD8D3 !important; /* turquesa claro */
        }
        .hero {
            background: linear-gradient(rgba(0,173,181,0.7), rgba(0,173,181,0.7)), /* cyan brillante */
                        url('https://source.unsplash.com/1600x400/?el-salvador,travel') center/cover no-repeat;
            color: #F2F2F4; /* texto claro */
            padding: 80px 20px;
            text-align: center;
        }
        .btn-primary {
            background-color: #00ADB5; /* cyan brillante */
            border: none;
        }
        .btn-primary:hover {
            background-color: #FFAE00; /* amarillo-naranja */
            color: #393E46; /* gris oscuro */
        }
        .card {
            background-color: #AAD8D3; /* turquesa claro */
            border: none;
        }
        footer {
            background-color: #393E46; /* gris oscuro */
            color: #F2F2F4; /* texto claro */
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🌎 Lugares Turísticos de El Salvador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/places">Lugares</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <h1 class="display-4 fw-bold">Descubre El Salvador</h1>
        <p class="lead">Explora playas, volcanes y pueblos coloniales</p>
    </div>

    <!-- Contenido dinámico -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Lugares Turísticos de El Salvador | Diseñado con ❤️</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>