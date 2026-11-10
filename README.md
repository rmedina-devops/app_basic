# Template with FlightPHP

Plantilla base para aplicaciones web en PHP con **FlightPHP**, **Blade** (BladeOne), **PHPUnit** y **FrankenPHP**, lista para levantar con Docker.

## Stack

| Pieza | Para qué |
|---|---|
| [FlightPHP](https://flightphp.com) | Micro-framework: rutas y capa HTTP |
| [BladeOne](https://github.com/EFTEC/BladeOne) | Motor de plantillas Blade sin depender de Laravel |
| [PHPUnit](https://phpunit.de) | Pruebas automatizadas |
| [FrankenPHP](https://frankenphp.dev) | Servidor de aplicaciones PHP sobre Caddy |
| [phpdotenv](https://github.com/vlucas/phpdotenv) | Variables de entorno desde `.env` |

## Requisitos

- Docker y Docker Compose
- (Opcional) PHP 8.2+ y Composer si quieres trabajar fuera del contenedor

## Inicio rápido

```bash
git clone https://github.com/rmedina-devops/template-php.git
cd template-php
cp .env.example .env
docker compose up -d --build
```

Abre <https://localhost/>. Si el navegador avisa del certificado, es el autofirmado de Caddy en local.

## Estructura del proyecto

```
.
├── app
│   ├── Views
│   │   ├── layout/base.blade.php   # Layout principal
│   │   └── welcome.blade.php       # Vista de ejemplo
│   └── config
│       ├── bootstrap.php           # Arranque: autoload, servicios y rutas
│       ├── services.php            # Registro de servicios (Blade, dotenv)
│       └── routes.php              # Definición de rutas
├── public
│   ├── css/styles.css              # Estáticos (document root)
│   └── index.php                   # Punto de entrada
├── storage                         # Caché de vistas compiladas
├── tests                           # Pruebas PHPUnit
├── Caddyfile                       # Configuración de FrankenPHP/Caddy
├── Dockerfile
├── compose.yml
└── composer.json
```

## Cómo funciona

1. `public/index.php` carga `app/config/bootstrap.php` y llama a `start()`.
2. `bootstrap.php` carga el autoload, registra los servicios (`services.php`) y las rutas (`routes.php`).
3. Las rutas renderizan vistas con el helper `render`:

```php
Flight::route('/', function () {
    Flight::render('welcome', ['title' => 'Inicio']);
});
```

## Vistas con Blade

Las vistas viven en `app/Views` y se compilan en `storage/`. El layout base se extiende así:

```blade
@extends('layout.base')

@section('title', 'Inicio')

@section('content')
    <h1>Hola desde Blade</h1>
@endsection
```

## Archivos estáticos

El *document root* es `public/`, por lo que `public/css/styles.css` se referencia como:

```html
<link rel="stylesheet" href="/css/styles.css">
```

## Pruebas

```bash
composer test
```

Los tests cargan `app/config/bootstrap.php` sin llamar a `start()`, así puedes probar rutas y servicios sin levantar el servidor.

## Variables de entorno

| Variable | Descripción | Valores |
|---|---|---|
| `APP_ENV` | Entorno de ejecución | `development` / `production` |

En `production` Blade usa modo `FAST` (no recompila vistas); en el resto usa `AUTO`.

## Comandos útiles

```bash
docker compose up -d --build      # Levantar
docker compose logs -f            # Ver logs
docker compose down               # Apagar
docker compose exec <servicio> composer test
```

## Author
- Renzo Medina | DevOps & LMS Development