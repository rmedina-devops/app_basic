<!DOCTYPE html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="dark">
    @yield('content')
</body>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div>
                    © @yield('year') Modern PHP Template Starter. Construido con CSS Puro & FrankenPHP.
                </div>
                <div>
                    Diseñado: <strong>@yield('author')</strong>
                </div>
            </div>
        </div>
    </footer>
</html>