@extends('layout.base')
@section('title')
{{ $title }}
@endsection
@section('content')
    <div class="login">
        <div class="login-card">
        <div class="login-header">
            <h2>Bienvenido</h2>
            <p>Ingresa tus datos para continuar</p>
        </div>

        <form method="POST" action="/validate">
            <div class="input-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox"> Recuérdame
                </label>
                <a href="#" class="forgot-pass">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn-submit">Iniciar Sesión</button>
        </form>

        <div class="login-footer">
            <p>¿No tienes una cuenta? <a href="#">Regístrate</a></p>
        </div>
    </div>
    </div>
@endsection
@section('year')
    {{ $year }}
@endsection
@section('author')
    {{ $author }}
@endsection