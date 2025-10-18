<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leandro Cebreiros - Desarrollador Web Fullstack</title>
    <!-- Devicon icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }
        
        .typing-cursor {
            animation: blink 1s infinite;
            color: #a855f7;
        }
        
        @keyframes blink {
            0%, 49% { opacity: 1; }
            50%, 100% { opacity: 0; }
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .section-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .section-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .tech-card:hover {
            transform: translateY(-8px) scale(1.05);
        }
        
    </style>
</head>
<body class="bg-gradient-to-br from-[#0f0525] via-[#1a0b2e] to-[#0f0525] text-gray-100">
    
    <!-- Navbar Profesional y Minimalista -->
<nav id="navbar" class="fixed w-full bg-[#0f0525]/90 backdrop-blur-lg z-50 border-b border-purple-500/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo/Marca -->
            <a href="#hero" class="flex items-center group">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-600/50">
                    <span class="text-white font-bold text-base">LC</span>
                </div>
            </a>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center gap-1">
                <a href="#hero" class="nav-link px-4 py-2 text-sm text-gray-300 hover:text-white rounded-lg transition-colors duration-200">
                    Inicio
                </a>
                <a href="#proyectos" class="nav-link px-4 py-2 text-sm text-gray-300 hover:text-white rounded-lg transition-colors duration-200">
                    Proyectos
                </a>
                <a href="#tecnologias" class="nav-link px-4 py-2 text-sm text-gray-300 hover:text-white rounded-lg transition-colors duration-200">
                    Tecnologías
                </a>
                <a href="#sobre-mi" class="nav-link px-4 py-2 text-sm text-gray-300 hover:text-white rounded-lg transition-colors duration-200">
                    Sobre Mí
                </a>
                <a href="#contacto" class="nav-link px-4 py-2 text-sm text-gray-300 hover:text-white rounded-lg transition-colors duration-200">
                    Contacto
                </a>
                
                <!-- Botón Descargar CV Mejorado -->
                <a href="docs/cv-leandro-cebreiros.pdf" download class="ml-4 group relative flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-sm font-medium rounded-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-purple-600/50">
                    <!-- Efecto de brillo al hover -->
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-700"></span>
                    
                    <svg class="w-4 h-4 relative z-10 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="relative z-10">Descargar CV</span>
                </a>
            </div>

            <!-- Botón Mobile Menu -->
            <button id="mobile-menu-button" class="md:hidden p-2 text-gray-300 hover:text-white rounded-lg hover:bg-purple-600/20 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0f0525]/95 backdrop-blur-lg border-t border-purple-500/10">
        <div class="px-4 py-4 space-y-2">
            <a href="#hero" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Inicio
            </a>
            <a href="#proyectos" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Proyectos
            </a>
            <a href="#tecnologias" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Tecnologías
            </a>
            <a href="#sobre-mi" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Sobre Mí
            </a>
            <a href="#contacto" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Contacto
            </a>
            
            <!-- Botón CV Mobile Mejorado -->
            <a href="docs/cv-leandro-cebreiros.pdf" download class="group relative flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium rounded-lg overflow-hidden transition-all duration-300 mt-2 hover:shadow-xl hover:shadow-purple-600/50">
                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-700"></span>
                
                <svg class="w-5 h-5 relative z-10 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="relative z-10">Descargar CV</span>
            </a>
        </div>
    </div>
</nav>

            <!-- Botón Mobile Menu -->
            <button id="mobile-menu-button" class="md:hidden p-2 text-gray-300 hover:text-white rounded-lg hover:bg-purple-600/20 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0f0525]/95 backdrop-blur-lg border-t border-purple-500/10">
        <div class="px-4 py-4 space-y-2">
            <a href="#hero" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Inicio
            </a>
            <a href="#proyectos" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Proyectos
            </a>
            <a href="#tecnologias" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Tecnologías
            </a>
            <a href="#sobre-mi" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Sobre Mí
            </a>
            <a href="#contacto" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 rounded-lg transition-all duration-200">
                Contacto
            </a>
            
            <!-- Botón CV Mobile -->
            <a href="docs/cv-leandro-cebreiros.pdf" download class="flex items-center justify-center gap-2 px-4 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium rounded-lg transition-all duration-300 mt-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Descargar CV
            </a>
        </div>
    </div>
</nav>

                <!-- Botón Mobile Menu -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-purple-600/20 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#1a0b2e] border-t border-purple-500/20">
            <div class="px-4 py-4 space-y-2">
                <a href="#hero" class="block px-4 py-3 rounded-lg hover:bg-purple-600/20 hover:text-purple-400 transition-all duration-300">Inicio</a>
                <a href="#proyectos" class="block px-4 py-3 rounded-lg hover:bg-purple-600/20 hover:text-purple-400 transition-all duration-300">Proyectos</a>
                <a href="#tecnologias" class="block px-4 py-3 rounded-lg hover:bg-purple-600/20 hover:text-purple-400 transition-all duration-300">Tecnologías</a>
                <a href="#sobre-mi" class="block px-4 py-3 rounded-lg hover:bg-purple-600/20 hover:text-purple-400 transition-all duration-300">Sobre Mí</a>
                <a href="#contacto" class="block px-4 py-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg text-center font-semibold">Contacto</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section con Foto -->
    <section id="hero" class="h-screen flex items-center justify-center px-4 relative overflow-hidden">
        <!-- Fondo animado -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full filter blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-500 rounded-full filter blur-3xl animate-float" style="animation-delay: 2s"></div>
        </div>
        
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center relative z-10 section-reveal active">
            <!-- Columna Izquierda -->
            <div class="space-y-6 order-2 md:order-1">
                <div class="space-y-2">
                    <h2 class="text-5xl md:text-6xl font-bold leading-tight">
                        <span id="typing-text"></span>
                        <span class="typing-cursor">|</span>
                    </h2>
                    <p class="text-2xl text-purple-300 font-medium">Desarrollador Web</p>
                </div>
                
                <p class="text-lg text-gray-300 leading-relaxed">
                    <span class="text-purple-400 font-semibold">+1 año Desarrollando.</span> 
                     Con aprendizaje constante y pasion por la tecnologia.
                     Orientado 100% a la demanda del cliente y las soluciones eficientes.
                </p>

                <!--
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#contacto" class="group flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg shadow-purple-900/50">
                        <span class="font-semibold">Contáctame</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#proyectos" class="flex items-center gap-2 px-8 py-4 bg-transparent border-2 border-purple-600 hover:bg-purple-600/20 rounded-lg transition-all duration-300 transform hover:scale-105">
                        <span class="font-semibold">Ver Proyectos</span>
                    </a>
                </div> -->

                <div class="flex gap-4 pt-4">
                    <a href="https://www.linkedin.com/in/lcebreiros/" class="w-12 h-12 flex items-center justify-center bg-purple-600/20 hover:bg-purple-600 rounded-lg transition-all duration-300 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://github.com/Lcebreiros" class="w-12 h-12 flex items-center justify-center bg-gray-800/50 hover:bg-gray-700 rounded-lg transition-all duration-300 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Columna Derecha - Foto -->
            <div class="order-1 md:order-2 flex justify-center">
    <div class="relative">
        <div class="w-80 h-80 rounded-full bg-gradient-to-br from-purple-600 via-pink-600 to-purple-800 p-2 animate-gradient shadow-2xl shadow-purple-900/50">
            <div class="w-full h-full rounded-full bg-[#1a0b2e] overflow-hidden">
                <!-- REEMPLAZA ESTA LÍNEA CON TU FOTO -->
                <img src="img/mi-foto.jpg" alt="Leandro Cebreiros" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                
                <!-- COMENTADO: Placeholder SVG (eliminar cuando tengas tu foto) -->
                <!-- <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-48 h-48 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div> -->
            </div>
        </div>
        <div class="absolute -top-4 -right-4 w-24 h-24 bg-purple-500 rounded-full filter blur-2xl opacity-60 animate-pulse"></div>
        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-pink-500 rounded-full filter blur-2xl opacity-60 animate-pulse" style="animation-delay: 1s"></div>
    </div>
</div>
        </div>
    </section>

    <!-- Sección de Proyectos -->
    <section id="proyectos" class="min-h-screen flex items-center py-20 px-4 section-reveal">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Proyectos <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Destacados</span>
            </h2>
            <p class="text-gray-400 text-lg">Algunos de mis trabajos más recientes</p>
        </div>
        
        <div class="w-full flex justify-center">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto Gestior -->
                <div class="group bg-[#1a0b2e] rounded-2xl border border-purple-800/50 overflow-hidden hover:border-purple-600 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-900/50 hover:-translate-y-2">
                    <div class="relative h-56 bg-gradient-to-br from-purple-600 to-pink-600 overflow-hidden">
                        <img src="/images/proyectos/gestior/gestior.png" 
                             alt="Gestior" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center" style="display: none;">
                            <svg class="w-24 h-24 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                            <button onclick="openProjectModal('gestior')" class="p-3 bg-white/90 hover:bg-white rounded-full transform scale-0 group-hover:scale-100 transition-transform duration-300 delay-75">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Gestior</h3>
                        <p class="text-gray-400 mb-4 text-sm leading-relaxed">Herramienta de gestión económica para comercios y empresas. Permite administrar sucursales, empleados, productos, gastos, pedidos, pagos y stock desde un solo panel intuitivo.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Laravel 12</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">SQL</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Livewire</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Fortify</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">AWS</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto Cuanto Sabe -->
                <div class="group bg-[#1a0b2e] rounded-2xl border border-purple-800/50 overflow-hidden hover:border-purple-600 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-900/50 hover:-translate-y-2">
                    <div class="relative h-56 bg-gradient-to-br from-blue-600 to-cyan-600 overflow-hidden">
                        <img src="/images/proyectos/cuantosabe/cuantosabe.png" 
                             alt="Cuanto Sabe" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-600 flex items-center justify-center" style="display: none;">
                            <svg class="w-24 h-24 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                            <button onclick="openProjectModal('cuanto_sabe')" class="p-3 bg-white/90 hover:bg-white rounded-full transform scale-0 group-hover:scale-100 transition-transform duration-300 delay-75">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Cuanto Sabe</h3>
                        <p class="text-gray-400 mb-4 text-sm leading-relaxed">Juego web para streaming con overlay interactivo, panel de control para host, participación de invitados y público en tiempo real, y comunicación mediante websockets.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Laravel 12</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">SQL</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Websockets</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">JavaScript</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Pusher</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">AWS</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Hostinger</span>
                            <span class="px-3 py-1 bg-purple-900/30 text-purple-300 text-xs rounded-full border border-purple-700/50">Docker</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TECNOLOGIAS -->
<section id="tecnologias" class="py-20 px-4 bg-[#1a0b2e]/50 section-reveal">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Tecnologías & <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Herramientas</span>
            </h2>
            <p class="text-gray-400 text-lg">Mi stack tecnológico actual</p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">

            <!-- TRABAJO CON -->
            <div class="tech-card group bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] rounded-2xl border border-purple-800/50 p-8 hover:border-purple-600 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-900/50 hover:-translate-y-2">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-6 text-white text-center">Trabajo con</h3>
                <div class="grid grid-cols-5 gap-6 items-center justify-items-center">
                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-purple-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-php-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">PHP</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-red-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-laravel-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Laravel</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-css3-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">CSS</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-html5-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">HTML</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-400 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-mysql-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- APRENDIENDO -->
            <div class="tech-card group bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] rounded-2xl border border-blue-800/50 p-8 hover:border-blue-600 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/50 hover:-translate-y-2">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-6 text-white text-center">Aprendiendo</h3>
                <div class="grid grid-cols-4 gap-6 items-center justify-items-center">
                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-javascript-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">JavaScript</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-red-600 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-java-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Java</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-cyan-400 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-react-original colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">React</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-green-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-nodejs-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Node</span>
                    </div>
                </div>
            </div>

            <!-- HERRAMIENTAS -->
            <div class="tech-card group bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] rounded-2xl border border-pink-800/50 p-8 hover:border-pink-600 transition-all duration-500 hover:shadow-2xl hover:shadow-pink-900/50 hover:-translate-y-2">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-gradient-to-r from-pink-600 to-purple-600 rounded-full p-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-6 text-white text-center">Herramientas</h3>
                <div class="grid grid-cols-4 gap-6 items-center justify-items-center">
                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-600 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-git-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Git</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-docker-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Docker</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-400 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-amazonwebservices-plain-wordmark colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">AWS</span>
                    </div>

                    <div class="flex flex-col items-center gap-2 group/item">
                        <div class="relative">
                            <div class="absolute inset-0 bg-yellow-400 rounded-lg blur-lg opacity-0 group-hover/item:opacity-50 transition-opacity duration-300"></div>
                            <i class="skill-icon devicon-linux-plain colored text-4xl relative z-10"></i>
                        </div>
                        <span class="text-xs text-gray-300 font-medium">Linux</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- AGREGA ESTOS ESTILOS EN TU <style> (en el <head> de tu HTML) -->
<style>
/* Estilos para las tarjetas de tecnologías */
.tech-card {
    position: relative;
    overflow: hidden;
}

/* Animación de brillo que cruza la tarjeta */
.tech-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(168, 85, 247, 0.2), transparent);
    transition: left 0.5s;
}

.tech-card:hover::before {
    left: 100%;
}

/* Animación de los íconos de habilidades */
.skill-icon {
    transition: all 0.3s ease;
}

.tech-card:hover .skill-icon {
    transform: scale(1.2) rotate(5deg);
}
</style>


<!-- Sección Sobre Mí - Profesional y Minimalista -->
<section id="sobre-mi" class="min-h-screen flex items-center py-20 px-4 section-reveal">
    <div class="max-w-6xl mx-auto w-full">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Sobre <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Mí</span></h2>
            <p class="text-gray-400 text-lg">Desarrollador apasionado por crear soluciones efectivas</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 items-start">
            
            <!-- Columna Izquierda: Foto -->
            <div class="flex justify-center">
                <div class="relative group w-full max-w-sm">
                    <div class="w-full aspect-[3/4] rounded-xl bg-gradient-to-br from-purple-600 to-pink-600 p-[2px]">
                        <div class="w-full h-full rounded-xl bg-[#1a0b2e] overflow-hidden">
                            <!-- REEMPLAZA CON TU IMAGEN -->
                            <img src="ruta/a/tu/foto.jpg" alt="Leandro Cebreiros" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            
                            <!-- Placeholder mientras subes tu foto -->
                            <!-- <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e]">
                                <svg class="w-24 h-24 text-purple-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Contenido Compacto -->
            <div class="space-y-5">
                
                <!-- Bio Breve -->
                <div class="space-y-3 text-gray-300 text-sm leading-relaxed">
                        <p>
                            <span class="text-purple-400 font-semibold">1+ años Desarrollando</span> de manera autonoma y autodidacta complementada con cursos para expandir mi conocimiento, contando ya con proyectos destinados a cliente y producción.
                        </p>
                        <p>
                            Gracias a esos proyectos y a animarme a desarrollar de manera autonoma para clientes, pude adquirir el conocimiento que me permite pensar las maneras mas eficientes de cubrir los requerimientos y deseos del cliente, muchas veces, itentando superar sus espectativas y guiarlos dentro de sus necesidades.
                        </p>
                        <p>
                            Disfruto plenamente el proceso de desarrollo, el poder de recibir una idea o un proyecto y verlo cobrar vida. Como un proyecto nos conduce a mas constantemente siempre superando la idea original. Aprendiendo y creciendo en el camino.
                        </p>
                </div>

                <div class="h-px bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>

                <!-- Soft Skills -->
                <div>
                    <h3 class="text-base font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-4 bg-gradient-to-b from-purple-600 to-pink-600 rounded"></span>
                        Habilidades Blandas
                    </h3>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-xs text-gray-300">
                            <div class="w-1.5 h-1.5 rounded-full bg-purple-500"></div>
                            <span>Trabajo en equipo</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-300">
                            <div class="w-1.5 h-1.5 rounded-full bg-purple-500"></div>
                            <span>Resolución de problemas</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-300">
                            <div class="w-1.5 h-1.5 rounded-full bg-purple-500"></div>
                            <span>Gestión de tiempo</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-300">
                            <div class="w-1.5 h-1.5 rounded-full bg-purple-500"></div>
                            <span>Adaptabilidad</span>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>

                <!-- Formación -->
                <div>
                    <h3 class="text-base font-bold text-white mb-3 flex items-center gap-2">
                        <span class="w-1 h-4 bg-gradient-to-b from-blue-600 to-cyan-600 rounded"></span>
                        Formación
                    </h3>
                    <div class="space-y-3">
                        <div class="group">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-white text-sm group-hover:text-purple-400 transition-colors">Master en Desarrollo web PHP Laravel</h4>
                                    <p class="text-purple-400 text-xs mt-0.5">Udemy Academy</p>
                                </div>
                                <span class="text-xs text-gray-500 font-medium whitespace-nowrap">2024</span>
                            </div>
                        </div>

                        <div class="group">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex-1">
                                    <h4 class="font-semibold text-white text-sm group-hover:text-blue-400 transition-colors">Desarrollo Back-End Java</h4>
                                    <p class="text-blue-400 text-xs mt-0.5">TalentoTech BA</p>
                                </div>
                                <span class="text-xs text-gray-500 font-medium whitespace-nowrap">En curso</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gradient-to-r from-transparent via-purple-500/50 to-transparent"></div>

            </div>
        </div>
    </div>
</section>

<!-- Sección de Contacto Mejorada -->
<section id="contacto" class="min-h-screen flex items-center py-20 px-4 bg-[#1a0b2e]/50 section-reveal">
    <div class="max-w-6xl mx-auto w-full">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Trabajemos <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Juntos</span></h2>
            <p class="text-gray-400 text-lg">¿Tienes un proyecto en mente? Hablemos</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Columna Izquierda: Formulario -->
            <div class="bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] p-8 rounded-2xl border border-purple-800/50 shadow-2xl shadow-purple-900/30 hover:border-purple-600 transition-all duration-500 flex flex-col h-full">
                <form class="space-y-5 flex-1 flex flex-col">
                    <div>
                        <label for="nombre" class="block text-sm font-medium mb-2 text-purple-300">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required
                            class="w-full px-4 py-3 bg-[#2d1b4e] border border-purple-700/50 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/50 transition placeholder-gray-500"
                            placeholder="Tu nombre">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 text-purple-300">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 bg-[#2d1b4e] border border-purple-700/50 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/50 transition placeholder-gray-500"
                            placeholder="tu@email.com">
                    </div>

                    <div>
                        <label for="asunto" class="block text-sm font-medium mb-2 text-purple-300">Asunto</label>
                        <input type="text" id="asunto" name="asunto" required
                            class="w-full px-4 py-3 bg-[#2d1b4e] border border-purple-700/50 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/50 transition placeholder-gray-500"
                            placeholder="¿De qué quieres hablar?">
                    </div>

                    <div class="flex-1 flex flex-col">
                        <label for="mensaje" class="block text-sm font-medium mb-2 text-purple-300">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" required
                            class="w-full px-4 py-3 bg-[#2d1b4e] border border-purple-700/50 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/50 transition resize-none placeholder-gray-500 flex-1"
                            placeholder="Cuéntame sobre tu proyecto..."></textarea>
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg shadow-purple-900/50 flex items-center justify-center gap-2">
                        <span>Enviar Mensaje</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Columna Derecha: Información -->
            <div class="flex flex-col gap-6 h-full">
                
                <!-- Disponibilidad -->
                <div class="bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] p-6 rounded-2xl border border-green-800/50 hover:border-green-600 transition-all duration-500 group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-green-600/20 flex items-center justify-center group-hover:bg-green-600 transition-all flex-shrink-0">
                            <svg class="w-6 h-6 text-green-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                                Disponible para trabajar
                                <span class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                            </h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Actualmente disponible para proyectos trabajar en relacion de dependencia y proyectos freelance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ubicación -->
                <div class="bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] p-6 rounded-2xl border border-purple-800/50 hover:border-purple-600 transition-all duration-500 group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-600/20 flex items-center justify-center group-hover:bg-purple-600 transition-all flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-2">Ubicación</h3>
                            <p class="text-gray-400 text-sm leading-relaxed mb-2">
                                Lomas de Zamora, Buenos Aires, Argentina
                            </p>
                            <p class="text-purple-300 text-xs">
                                 Disponible para proyectos remotos
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Encuéntrame en -->
                <div class="bg-gradient-to-br from-[#1a0b2e] to-[#2d1b4e] p-6 rounded-2xl border border-pink-800/50 hover:border-pink-600 transition-all duration-500 flex-1 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-white mb-6 text-center">Encuéntrame en</h3>
                    <div class="flex justify-center gap-4">
                        <a href="https://www.linkedin.com/in/lcebreiros/" target="_blank" rel="noopener noreferrer" 
                           class="w-12 h-12 flex items-center justify-center bg-purple-600/20 hover:bg-purple-600 rounded-lg transition-all duration-300 transform hover:scale-110" title="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        
                        <a href="https://instagram.com/leancebreiros" target="_blank" rel="noopener noreferrer" 
                           class="w-12 h-12 flex items-center justify-center bg-pink-600/20 hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-600 rounded-lg transition-all duration-300 transform hover:scale-110" title="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>

                        <a href="https://wa.me/5491151162188" target="_blank" rel="noopener noreferrer" 
                           class="w-12 h-12 flex items-center justify-center bg-green-600/20 hover:bg-green-600 rounded-lg transition-all duration-300 transform hover:scale-110" title="WhatsApp">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884h-.004z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
    <!-- Footer -->
    <footer class="bg-[#1a0b2e] border-t border-purple-900/30 py-8 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-gray-400">© 2025 Leandro Cebreiros. Desarrollado con Laravel</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Cerrar menu mobile al hacer click en un link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll <= 0) {
                navbar.classList.remove('shadow-xl');
            } else {
                navbar.classList.add('shadow-xl');
            }
            
            // Auto-hide navbar on scroll down (opcional)
            if (currentScroll > lastScroll && currentScroll > 500) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        });

        // Active link highlight
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-purple-400', 'bg-purple-600/20');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-purple-400', 'bg-purple-600/20');
                }
            });
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer para animaciones
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-reveal').forEach((el) => {
            observer.observe(el);
        });

        // Parallax effect for hero background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.animate-float');
            parallaxElements.forEach((el, index) => {
                const speed = 0.5 + (index * 0.1);
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Typing effect for hero title
        const typingText = document.getElementById('typing-text');
        const cursor = document.querySelector('.typing-cursor');
        
        if (typingText && cursor) {
            const text1 = 'Leandro ';
            const text2 = 'Cebreiros';
            let index = 0;
            let isFirstPart = true;
            
            const typeWriter = () => {
                if (isFirstPart) {
                    if (index < text1.length) {
                        typingText.textContent += text1.charAt(index);
                        index++;
                        setTimeout(typeWriter, 100);
                    } else {
                        isFirstPart = false;
                        index = 0;
                        // Crear el span con gradiente
                        const gradientSpan = document.createElement('span');
                        gradientSpan.className = 'bg-gradient-to-r from-purple-400 via-pink-500 to-purple-600 bg-clip-text text-transparent animate-gradient';
                        typingText.appendChild(gradientSpan);
                        setTimeout(typeWriter, 100);
                    }
                } else {
                    const gradientSpan = typingText.querySelector('span');
                    if (index < text2.length) {
                        gradientSpan.textContent += text2.charAt(index);
                        index++;
                        setTimeout(typeWriter, 100);
                    } else {
                        cursor.style.display = 'none';
                    }
                }
            };
            
            setTimeout(typeWriter, 800);
        }

        // Funciones del modal y carrusel
        let currentProjectId = '';
        let currentImageIndex = 0;
    console.log('Script cargado: modal/carrusel inicializado');
    console.log('openProjectModal defined?', typeof openProjectModal);
    console.log('showProjectInModal defined?', typeof showProjectInModal);
        
        function openProjectModal(projectId) {
            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('modalContent');
            currentProjectId = projectId; // Asignamos el projectId actual
            currentImageIndex = 0; // Reseteamos el índice de imagen
            
            const project = projectsData[projectId];
            if (project) {
                showProjectInModal(project);
                
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.add('opacity-100');
                    modalContent.classList.add('scale-100');
                }, 50);
            }
        }

        // Datos de los proyectos
        const projectsData = {
            gestior: {
                title: 'Gestior',
                    images: [
                        '/images/proyectos/gestior/1.png',
                        '/images/proyectos/gestior/2.png',
                        '/images/proyectos/gestior/3.png',
                        '/images/proyectos/gestior/4.png'
                    ],
                    description: `
                        <p class="mb-4">Gestior es una herramienta de gestión económica diseñada para cubrir las necesidades tanto de pequeños comerciantes como de grandes empresas, centralizando la administración en un solo panel intuitivo.</p>
                        <h4 class="text-lg font-semibold mb-2">Funciones principales:</h4>
                        <ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
                            <li>Administración de sucursales y empleados con permisos personalizados</li>
                            <li>Gestión de productos y gastos a nivel general y seccional</li>
                            <li>Creación y administración de pedidos para clientes con comprobantes personalizados</li>
                            <li>Gestión de pagos y control de cuentas</li>
                            <li>Gestión de stock e historial para seguimiento contable</li>
                            <li>Panel amigable para administrar datos sin conocimientos técnicos de bases de datos</li>
                        </ul>
                        <h4 class="text-lg font-semibold mb-2">Tecnologías y detalles:</h4>
                        <ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
                            <li>Desarrollado en PHP Laravel 12</li>
                            <li>Base de datos SQL</li>
                            <li>Componentes interactivos con Livewire</li>
                            <li>Scopes para búsquedas precisas</li>
                            <li>Autenticación Fortify y registro mediante keys generadas por el superusuario</li>
                            <li>Desplegado en AWS</li>
                        </ul>
                    `,
                    technologies: ['Laravel 12', 'SQL', 'Livewire', 'Fortify', 'AWS'],
                    demoUrl: '#',
                    repoUrl: '#'
                },
                cuanto_sabe: {
                    title: 'Cuanto Sabe',
                    images: [
                        '/images/proyectos/cuantosabe/1.png',
                        '/images/proyectos/cuantosabe/2.png',
                        '/images/proyectos/cuantosabe/3.png',
                        '/images/proyectos/cuantosabe/4.png'
                    ],
                    description: `
                        <p class="mb-4">Cuanto Sabe es un juego web desarrollado en Laravel, pensado para integrarse como overlay en streaming. Permite la interacción en tiempo real entre host, invitado y público.</p>
                        <h4 class="text-lg font-semibold mb-2">Características principales:</h4>
                        <ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
                            <li>El host administra el juego desde un panel dedicado</li>
                            <li>El invitado responde preguntas en vivo, visualizando solo su interfaz</li>
                            <li>El público participa desde la plataforma, mostrando puntajes en tiempo real</li>
                            <li>Comunicación entre componentes mediante Laravel Websockets (Pusher)</li>
                            <li>Landing informativa, página de repeticiones y demo pública</li>
                        </ul>
                        <h4 class="text-lg font-semibold mb-2">Tecnologías y detalles:</h4>
                        <ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
                            <li>Laravel 12 y base de datos SQL</li>
                            <li>Overlay y ruleta desarrollados en JavaScript</li>
                            <li>Desplegado en Hostinger (juego) y AWS (página pública)</li>
                        </ul>
                    `,
                    technologies: ['Laravel 12', 'SQL', 'Websockets', 'JavaScript', 'Pusher', 'AWS', 'Hostinger'],
                    demoUrl: '#',
                    repoUrl: '#'
                }
            };

                // Mostrar contenido del proyecto dentro del modal
                function showProjectInModal(project) {
                    const modalContent = document.getElementById('modalContent');
                    if (!modalContent) return;
                    currentImageIndex = 0; // asegurar que arranque en la primera imagen

                    modalContent.innerHTML = `
                        <div class="bg-[#1a0b2e] rounded-xl overflow-hidden relative">
                            <div class="relative h-56 sm:h-72 md:h-96 bg-gradient-to-br from-purple-600 to-pink-600">
                                <div id="projectImages" class="w-full h-full relative">
                                    <img src="${project.images ? project.images[0] : project.image}" alt="${project.title}" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black/50"></div>

                                    ${project.images && project.images.length > 1 ? `
                                        <button onclick="prevImage()" class="absolute left-4 top-1/2 -translate-y-1/2 p-2 bg-black/50 hover:bg-black text-white rounded-full transition-colors">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                        </button>
                                        <button onclick="nextImage()" class="absolute right-4 top-1/2 -translate-y-1/2 p-2 bg-black/50 hover:bg-black text-white rounded-full transition-colors">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </button>
                                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                                            ${project.images.map((_, index) => `
                                                <button onclick="showImage(${index})" class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-colors"></button>
                                            `).join('')}
                                        </div>
                                    ` : ''}
                                </div>
                            </div>

                            <button onclick="closeProjectModal()" class="absolute top-4 right-4 p-2 bg-black/50 hover:bg-black text-white rounded-full transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>

                            <div class="p-4 sm:p-6 md:p-8">
                                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">${project.title}</h2>
                                <div class="prose prose-invert max-w-none mb-6 text-sm sm:text-base">
                                    ${project.description}
                                </div>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    ${project.technologies.map(tech => `
                                        <span class="px-2 sm:px-3 py-1 bg-purple-900/30 text-purple-300 text-xs sm:text-sm rounded-full border border-purple-700/50">${tech}</span>
                                    `).join('')}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                                    <a href="${project.repoUrl}" target="_blank" class="flex items-center justify-center gap-2 py-2.5 sm:py-3 bg-purple-600/20 hover:bg-purple-600 text-purple-400 hover:text-white rounded-lg transition-all duration-300 text-xs sm:text-sm font-medium">Ver Código Fuente</a>
                                    <a href="${project.demoUrl}" target="_blank" class="flex-1 flex items-center justify-center gap-2 py-2.5 sm:py-3 bg-pink-600/20 hover:bg-pink-600 text-pink-400 hover:text-white rounded-lg transition-all duration-300 text-xs sm:text-sm font-medium">Ver Demo</a>
                                </div>
                            </div>
                        </div>
                    `;

                    // Actualizar indicadores visuales al abrir
                    setTimeout(() => updateImageIndicators(), 50);
                }



        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            const modalContent = document.getElementById('modalContent');
            
            modal.classList.remove('opacity-100');
            modalContent.classList.remove('scale-100');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Funciones del carrusel de imágenes
        function prevImage() {
            const project = projectsData[currentProjectId];
            if (!project.images) return;
            
            currentImageIndex = (currentImageIndex - 1 + project.images.length) % project.images.length;
            updateProjectImage();
            updateImageIndicators();
        }

        function nextImage() {
            const project = projectsData[currentProjectId];
            if (!project.images) return;
            
            currentImageIndex = (currentImageIndex + 1) % project.images.length;
            updateProjectImage();
            updateImageIndicators();
        }

        function showImage(index) {
            const project = projectsData[currentProjectId];
            if (!project.images || index < 0 || index >= project.images.length) return;
            
            currentImageIndex = index;
            updateProjectImage();
            updateImageIndicators();
        }

        function updateProjectImage() {
            const project = projectsData[currentProjectId];
            if (!project.images) return;
            
            const imageContainer = document.getElementById('projectImages');
            if (!imageContainer) return;
            
            const image = imageContainer.querySelector('img');
            if (image) {
                image.src = project.images[currentImageIndex];
            }
        }

        function updateImageIndicators() {
            const project = projectsData[currentProjectId];
            if (!project.images) return;
            
            const indicators = document.querySelectorAll('#projectImages .rounded-full');
            indicators.forEach((indicator, index) => {
                if (index === currentImageIndex) {
                    indicator.classList.remove('bg-white/50');
                    indicator.classList.add('bg-white');
                } else {
                    indicator.classList.add('bg-white/50');
                    indicator.classList.remove('bg-white');
                }
            });
        }
    </script>

    <!-- Modal de Proyecto -->
    <div id="projectModal" class="fixed inset-0 z-50 flex items-start justify-center p-4 overflow-y-auto bg-black/90 opacity-0 transition-opacity duration-300 hidden">
        <div id="modalContent" class="transform scale-95 transition-transform duration-300 w-full max-w-4xl my-4 sm:my-6">
            <!-- El contenido del modal se insertará aquí dinámicamente -->
        </div>
    </div>
</body>
</html>