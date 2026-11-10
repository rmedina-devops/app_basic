@extends('layout.base')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="badge">
                <span class="badge-dot"></span> Plantilla de Alto Rendimiento PHP
            </div>

            <h1 class="hero-title">
                Stack moderno con <span class="brand-gradient">FrankenPHP & Flight</span>
            </h1>

            <p class="hero-subtitle">
                Arquitectura desacoplada, ligera y veloz utilizando <strong>FlightPHP</strong>, plantillas de <strong>Blade</strong>, batería de tests con <strong>PHPUnit</strong> y el servidor web en Go <strong>FrankenPHP</strong>.
            </p>

            <div class="tech-pill-container">
                <div class="tech-pill"><i class="fas fa-bolt" style="color: var(--accent-amber);"></i> Worker Mode Ready</div>
                <div class="tech-pill"><i class="fas fa-shield-alt" style="color: var(--accent-emerald);"></i> Automatic HTTPS</div>
                <div class="tech-pill"><i class="fas fa-feather" style="color: var(--primary);"></i> Micro Framework Lightweight</div>
                <button id="themeToggle" class="theme-btn" aria-label="Toggle theme" style="margin-left: 0.5rem;">
                    <i id="themeIcon" class="fas fa-moon"></i> Theme
                </button>
            </div>

            <!-- Terminal de Inicio Rápido -->
            <div style="max-width: 750px; margin: 2.5rem auto 0;">
                <div class="terminal-box">
                    <div class="terminal-header">
                        <div class="terminal-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                        </div>
                        <span class="terminal-title">bash — quick setup</span>
                    </div>
                    <div class="terminal-body" style="text-align: left;">
                        <div>
                            <div class="cmd-comment"># 1. Copia el project desde GitHub</div>
                            <div class="cmd-code" id="cmd1">git clone https://github.com/rmedina-devops/template-php.git</div>
                        </div>
                        <div>
                            <div class="cmd-comment"># 2. Iniciar servidor con FrankenPHP (Docker)</div>
                            <div class="cmd-code" id="cmd2">docker run -v $PWD:/app -p 80:80 -p 443:443 dunglas/frankenphp</div>
                        </div>
                        <div>
                            <div class="cmd-comment"># 2.1 En Modo desarrollo levantar (docker compose)</div>
                            <div class="cmd-code" id="cmd2">docker composer up -d</div>
                        </div>
                        <div>
                            <div class="cmd-comment"># 3. Ejecutar suite de pruebas</div>
                            <div class="cmd-code" id="cmd3">./vendor/bin/phpunit u composer test</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Component Features & Code Snippets -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Pila Tecnológica Integrada</h2>
                <p class="section-desc">Diseñada para ofrecer la velocidad de un microframework con la potencia de componentes modernos.</p>
            </div>

            <div class="grid-features" style="margin-bottom: 3.5rem;">
                <!-- FlightPHP -->
                <div class="feature-card">
                    <div class="feature-icon flight"><i class="fas fa-paper-plane"></i></div>
                    <h3 class="feature-title">FlightPHP</h3>
                    <div class="feature-subtitle">Micro Routing Engine</div>
                    <p class="feature-desc">Enrutamiento simple, rápido y extensible sin sobrecarga ni complejidades de frameworks monolíticos.</p>
                </div>

                <!-- Blade -->
                <div class="feature-card">
                    <div class="feature-icon blade"><i class="fas fa-layer-group"></i></div>
                    <h3 class="feature-title">Illuminate Blade</h3>
                    <div class="feature-subtitle">Templating Engine</div>
                    <p class="feature-desc">Utiliza la sintaxis limpia de plantillas Blade fuera de Laravel para interfaces modulares.</p>
                </div>

                <!-- PHPUnit -->
                <div class="feature-card">
                    <div class="feature-icon phpunit"><i class="fas fa-vial"></i></div>
                    <h3 class="feature-title">PHPUnit</h3>
                    <p class="feature-subtitle">Testing Suite</p>
                    <p class="feature-desc">Infraestructura preparada para ejecutar pruebas unitarias e integración de forma inmediata.</p>
                </div>

                <!-- FrankenPHP -->
                <div class="feature-card">
                    <div class="feature-icon franken"><i class="fas fa-bolt"></i></div>
                    <h3 class="feature-title">FrankenPHP</h3>
                    <p class="feature-subtitle">Application Server (Caddy + Go)</p>
                    <p class="feature-desc">Servidor de aplicaciones PHP de última generación con soporte Worker Mode e inigualable rendimiento.</p>
                </div>
            </div>
        </div>
    </section>
     <!-- Folder Structure -->
    <section id="structure" class="structure-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Estructura del Proyecto</h2>
                <p class="section-desc">Organización limpia y modular recomendada para la plantilla.</p>
            </div>
            <div class="tree-box">
                <div class="tree-item"><i class="fas fa-folder-open folder-icon"></i> <strong>root/</strong></div>
                
                <div class="tree-item tree-indent-1"><i class="fas fa-file-alt file-icon"></i> Caddyfile <span class="tree-note">La configuración de FrankenPHP</span></div>
                <div class="tree-item tree-indent-1"><i class="fas fa-file-alt file-icon"></i> Dockerfile <span class="tree-note">Creación de la imagen de Composer y FrankenPHP</span></div>

                <div class="tree-item tree-indent-1"><i class="fas fa-folder folder-icon"></i> app/</div>
                <div class="tree-item tree-indent-2"><i class="fas fa-folder folder-icon"></i> Views/ <span class="tree-note">La carga de la vistas</span></div>
                <div class="tree-item tree-indent-2" style="padding-left: 4.25rem;"><i class="fas fa-folder folder-icon"></i> layout/</div>
                <div class="tree-item tree-indent-2" style="padding-left: 4.25rem;"><i class="fas fa-file-code file-icon"></i> welcome.blade.php</div>
                <div class="tree-item tree-indent-2"><i class="fas fa-folder folder-icon"></i> config/</div>
                <div class="tree-item tree-indent-2" style="padding-left: 4.25rem;"><i class="fas fa-file-code file-icon"></i> bootstrap.php <span class="tree-note">La carga de routes, services y vendor </span></div>
                <div class="tree-item tree-indent-2" style="padding-left: 4.25rem;"><i class="fas fa-file-code file-icon"></i> routes.php <span class="tree-note">La carga de rutas </span></div>
                <div class="tree-item tree-indent-2" style="padding-left: 4.25rem;"><i class="fas fa-file-code file-icon"></i> services.php <span class="tree-note">La configuración de tus vistas </span></div>

                <div class="tree-item tree-indent-1"><i class="fas fa-file-alt file-icon"></i> compose.yml <span class="tree-note">Despliegue con Docker composer para desarrollo local</span></div>
                <div class="tree-item tree-indent-1"><i class="fas fa-file-alt file-icon"></i> composer.json</div>
                <div class="tree-item tree-indent-1"><i class="fas fa-file-alt file-icon"></i> composer.lock</div>

                <div class="tree-item tree-indent-1"><i class="fas fa-folder folder-icon"></i> public/</div>
                <div class="tree-item tree-indent-2"><i class="fas fa-folder folder-icon"></i> css/ <span class="tree-note">Archivos CSS</span></div>
                <div class="tree-item tree-indent-2"><i class="fas fa-file-code file-icon"></i> index.php <span class="tree-note">Punto de entrada</span></div>

                <div class="tree-item tree-indent-1"><i class="fas fa-folder folder-icon"></i> cache/ <span class="tree-note">Cache compilado de Blade (.bladec)</span></div>
                <div class="tree-item tree-indent-1"><i class="fas fa-folder folder-icon"></i> tests/ <span class="tree-note">Archivos de tus pruebas</span></div>
            </div>
        </div>
    </section>
@endsection
@section('year')
    {{ $year }}
@endsection
@section('author')
    {{ $author }}
@endsection