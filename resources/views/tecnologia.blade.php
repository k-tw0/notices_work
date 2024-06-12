<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/home/structure.css') }}"> <!-- css pagina principal-->
</head>
<body class="antialiased">

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
            <div class="navbar-start">
                <div class="box-new" id="menuIcon">
                    <img class="burguer-svg" src="lol.svg" width="50" height="28">
                    <p class="p-svg-menu">MENÚ</p>
                </div>
                <div class="box-search">
                    <img class="search-svg" src="bx-search.svg" width="50" height="28">
                    <input class="input" type="text" placeholder="BUSCAR">
                </div>
            </div>

            <img class="img-principal" src="DESKTOP.png" width="50" height="28">

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ route('register') }}" class="button is-primary">
                            <strong>REGISTRARSE</strong>
                        </a>
                        <a href="{{ url('/home') }}" class="button is-light">
                            INICIAR SESION
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu desplegable -->
    <div id="menuContent" class="menu-content">
        <div class="box-nav-footer">
            <img class="img-principal menu" src="https://raw.githubusercontent.com/k-tw0/visiondigital/main/public/DESKTOP.png" width="35" height="28">
            <img class="equis-menu" id="id-equis-menu" src="https://raw.githubusercontent.com/k-tw0/visiondigital/3874a770d12ee76809728c4bb45840d690033c0a/public/icons/bxs-x-circle.svg" width="30" height="28">
        </div>

        <!-- Contenido del menú aquí -->
        <a href="{{ url('/') }}" class="menu-item nav-items">Inicio</a>
        <a href="{{ url('/ciberseguridad') }}" class="menu-item nav-items">Ciberseguridad</a>
        <a href="{{ url('/ia') }}" class="menu-item nav-items">Inteligencia Artificial</a>
        <a href="{{ url('/tecnologia') }}" class="menu-item nav-items">Tecnología</a>
        <a href="#" class="menu-item nav-items">Free Vision Coin</a>

        <div class="box-redes">
            <div class="box-icons-redes">
                <img class="svg-red" src="https://raw.githubusercontent.com/k-tw0/visiondigital/3874a770d12ee76809728c4bb45840d690033c0a/public/icons/bxl-facebook-square.svg" width="35" height="28">
                <img class="svg-red" src="https://raw.githubusercontent.com/k-tw0/visiondigital/3874a770d12ee76809728c4bb45840d690033c0a/public/icons/icons8-twitterx.svg" width="35" height="28">
                <img class="svg-red" src="https://raw.githubusercontent.com/k-tw0/visiondigital/3874a770d12ee76809728c4bb45840d690033c0a/public/icons/bxl-instagram-alt.svg" width="35" height="28">
            </div>
        </div>
    </div>
    <!-- El id: componente. - Es un intermediario para usar React-->
    <div class="link-seperation">
        
        <ul class="ul-links">
            <li class="li-noticias">
                <a class="a-noticias" href="{{ url('/') }}">
                    ÚLTIMAS NOTICIAS
                </a>
                <a class="a-noticias" href="{{ url('/ciberseguridad') }}">
                    CIBERSEGURIDAD
                </a>
                <a class="a-noticias" href="{{ url('/ia') }}">
                    IA
                </a>
                <a class="a-noticias TECNOLOGIA" href="{{ url('/tecnologia') }}">
                    TECNOLOGÍA
                </a>
            </li>
        </ul>
    </div>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
            TECNOLOGÍA
        </p>
        </div>
    </section>
    <div class="box-publicidad">
        <p class="p-publicidad">publicidad</p>

    </div>

    <div class="img-y-noticia">
        
        <div class="box-noticia">
            @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->reverse() as $publicacion)
                <img class="robot-img" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="order-card-noticia">
                    <a class="a-noticia-section" to="/about">
                        {{ $publicacion->categoria }}
                    </a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-noticia-title">{{ $publicacion->titulo }}</a>
                    <p class="p-descripcion">{{ $publicacion->descripcion }}</p>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion">{{ $publicacion->created_at }}</p>
                    </div>
                </div>
                @break {{-- Detiene el bucle después de la primera iteración --}}
            @endforeach
            
        </div>
        
    </div>
    <div class="box-order-group-notices">
        <div class="order">    
            <div class="card-extra-noticias">
                @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->slice(-2, -1)->reverse() as $publicacion)
                <img class="img-min-noticia" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="box-min-noticia">
        
                    <a class="a-min-noticia-section">{{ $publicacion->categoria }}</a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-min-noticia-title">{{ $publicacion->titulo }}</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion color">{{ $publicacion->redactor }}</p>
                        <p class="p-redaccion color">{{ $publicacion->created_at }}</p>
                    </div>
            
                </div>
                @endforeach

            </div>
            @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->slice(-3, -2)->reverse() as $publicacion)
            <div class="card-extra-noticias">
                <img class="img-min-noticia" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="box-min-noticia">
                    <a class="a-min-noticia-section">{{ $publicacion->categoria }}</a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-min-noticia-title">{{ $publicacion->titulo }}</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion color">{{ $publicacion->redactor }}</p>
                        <p class="p-redaccion color">{{ $publicacion->created_at }}</p>
                    </div>
                </div>
                
            </div>
            @endforeach

            @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->slice(-4, -3)->reverse() as $publicacion)
            <div class="card-extra-noticias">
                <img class="img-min-noticia" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="box-min-noticia">
                    <a class="a-min-noticia-section">{{ $publicacion->categoria }}</a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-min-noticia-title">{{ $publicacion->titulo }}</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion color">{{ $publicacion->redactor }}</p>
                        <p class="p-redaccion color">{{ $publicacion->created_at }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->slice(-5, -4)->reverse() as $publicacion)
            <div class="card-extra-noticias">
                <img class="img-min-noticia" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="box-min-noticia">
                    <a class="a-min-noticia-section">{{ $publicacion->categoria }}</a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-min-noticia-title">{{ $publicacion->titulo }}</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion color">{{ $publicacion->redactor }}</p>
                        <p class="p-redaccion color">{{ $publicacion->created_at }}</p>
                    </div>
                </div>
                
            </div>
            @endforeach
            @foreach($publicaciones->where('categoria', 'TECNOLOGIA')->slice(-6, -5)->reverse() as $publicacion)
            <div class="card-extra-noticias">
                <img class="img-min-noticia" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                <div class="box-min-noticia">
                    <a class="a-min-noticia-section">{{ $publicacion->categoria }}</a>
                    <a href="{{ route('noticia.show', ['id' => $publicacion->id]) }}" class="a-min-noticia-title">{{ $publicacion->titulo }}</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion color">{{ $publicacion->redactor }}</p>
                        <p class="p-redaccion color">{{ $publicacion->created_at }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
        <div class="a-parte">
            <div class="card-lomas-leido">
                <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            
            </div>
            <div class="card-dimiuta-noticia">
                @php
                    $publicacionMasVista = $publicaciones->sortByDesc('visitas')->first();
                @endphp

                @if($publicacionMasVista)
                    <p>Vistas: {{ $publicacionMasVista->visitas }}</p>
                    <div class="box-min-not">
                        <img class="img-article-not" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                        <div class="card-article-min-noticia">
                        <a class="a-min-noticia-section min">{{ $publicacionMasVista->categoria }}</a>
                        <a href="{{ route('noticia.show', ['id' => $publicacionMasVista->id]) }}" class="descript-min-not">{{ $publicacionMasVista->titulo }}</a>
                    </div>
                </div>
                @else
                    <p>No hay publicaciones disponibles.</p>
                @endif
            </div>
            <div class="card-dimiuta-noticia">
                @php
                    $segundaPublicacionMasVista = $publicaciones->sortByDesc('visitas')->slice(1, 1)->first();
                @endphp

                @if($segundaPublicacionMasVista)
                    <p>Vistas: {{ $segundaPublicacionMasVista->visitas }}</p>
                    <div class="box-min-not">
                        <img class="img-article-not" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                        <div class="card-article-min-noticia">
                            <a class="a-min-noticia-section min">{{ $segundaPublicacionMasVista->categoria }}</a>
                            <a href="{{ route('noticia.show', ['id' => $segundaPublicacionMasVista->id]) }}" class="descript-min-not">{{ $segundaPublicacionMasVista->titulo }}</a>
                        </div>
                    </div>
                @else
                    <p>No hay segunda publicación más vista disponible.</p>
                @endif
            </div>
            <div class="card-dimiuta-noticia">
                @php
                    $segundaPublicacionMasVista = $publicaciones->sortByDesc('visitas')->slice(2, 2)->first();
                @endphp

                @if($segundaPublicacionMasVista)
                    <p>Vistas: {{ $segundaPublicacionMasVista->visitas }}</p>
                    <div class="box-min-not">
                        <img class="img-article-not" src="{{ $publicacion->ruta_imagen }}" width="50" height="28">
                        <div class="card-article-min-noticia">
                            <a class="a-min-noticia-section min">{{ $segundaPublicacionMasVista->categoria }}</a>
                            <a href="{{ route('noticia.show', ['id' => $segundaPublicacionMasVista->id]) }}" class="descript-min-not">{{ $segundaPublicacionMasVista->titulo }}</a>
                        </div>
                    </div>
                @else
                    <p>No hay segunda publicación más vista disponible.</p>
                @endif
            </div>
            <div class="box-publicidad two">
                <p class="p-publicidad">publicidad</p>

            </div>
        </div>
        
    </div>
    @extends('layouts.footer')

    @section('footer')
    


    @endsection

    <script src="{{ asset('js/index.js') }}" defer></script>
    
    <!--<script src="{{ asset('js/welcome.js') }}" defer></script>-->
  </body>

</html>