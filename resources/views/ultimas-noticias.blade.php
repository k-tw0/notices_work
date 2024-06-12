<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/home/structure.css') }}"> <!-- css pagina principal-->
    <link rel="stylesheet" href="{{ asset('css/home/zona.css') }}"> <!-- css pagina principal-->
    <!-- Styles -->

</head>


<body class="antialiased">

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="box-new" id="menuIcon">
                    <img class="burguer-svg" src="lol.svg" width="50" height="28"> <p class="p-svg-menu">MENÚ</p>
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
                <a class="a-noticias ULTIMASNOT" href="{{ url('/') }}">
                    ÚLTIMAS NOTICIAS
                </a>
                <a class="a-noticias" href="{{ url('/ciberseguridad') }}">
                    CIBERSEGURIDAD
                </a>
                <a class="a-noticias" href="{{ url('/ia') }}">
                    IA
                </a>
                <a class="a-noticias" href="{{ url('/tecnologia') }}">
                    TECNOLOGÍA
                </a>
            </li>
        </ul>
    </div>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
            Ultimas noticias
        </p>
        </div>
    </section>
    <div class="box-publicidad">
        <p class="p-publicidad">publicidad</p>

    </div>

    <div class="card-noticias-principales">
        <div class="img-y-noticia">
            <div class="box-noticia">
                <img class="robot-img" src="robot.png" width="50" height="28">
                <div class="order-card-noticia">
                    <a class="a-noticia-section" to="/about">
                        TECNOLOGÍA
                    </a>
                    <a class="a-noticia-title">Jeff Bezos, Nvidia, OpenAI y Microsoft se unen para desarrollar robots similares a los humanos</a>
                    <div class="p-fecha-y-redaccion">
                        <p class="p-redaccion">REDACCION BLOOMBERG</p>
                        <p class="p-redaccion">03-05-2024</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="not-y-publicidad">
            <div class="box-not-selec">
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p >radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p>radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p>radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p>radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p>radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
                <div class = "card-not-s">
                    <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                    <div class = "text-card-s">
                        <a class = "text-card-c" href="#">Categoria</a>
                        <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                        
                    </div>
                    <p>radactado por: coquex</p>
                    <p class = "sep-line"></p>
                </div>
            </div>
            <div class="card-publicidad">Publicidad</div>
        </div>
    </div>


    <div class="img-y-noticia two">
        <div class="box-noticia">
            <img class="robot-img" src="robot.png" width="50" height="28">
            <div class="order-card-noticia">
                <a class="a-noticia-section two" to="/about">
                    TECNOLOGÍA
                </a>
                <a class="a-noticia-title two">Jeff Bezos, Nvidia, OpenAI y Microsoft se unen para desarrollar robots similares a los humanos</a>
                <p class="p-descripcion two">La ‘startup’ Figure AI está captando unos 675 millones de dólares en una ronda de financiación</p>
                <div class="p-fecha-y-redaccion">
                    <p class="p-redaccion two">REDACCION BLOOMBERG</p>
                    <p class="p-redaccion two">03-05-2024</p>
                </div>
            </div>
            <p class="vistas">vistas: 33</p>
        </div>
        
    </div>
    <div class="box-not-selec two">
        <div class = "card-not-s">
                <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                <div class = "text-card-s">
                    <a class = "text-card-c" href="#">Categoria</a>
                    <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                    
                </div>
                <p >radactado por: coquex</p>
                <p class = "sep-line"></p>
            </div>
            <div class = "card-not-s">
                <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                <div class = "text-card-s">
                    <a class = "text-card-c" href="#">Categoria</a>
                    <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                    
                </div>
                <p>radactado por: coquex</p>
                <p class = "sep-line"></p>
            </div>
            <div class = "card-not-s">
                <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                <div class = "text-card-s">
                    <a class = "text-card-c" href="#">Categoria</a>
                    <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                    
                </div>
                <p>radactado por: coquex</p>
                <p class = "sep-line"></p>
            </div>
            <div class = "card-not-s">
                <a href="#"><img class="img-min-noticia two" src="person.png" width="50" height="28"></a>
                <div class = "text-card-s">
                    <a class = "text-card-c" href="#">Categoria</a>
                    <a class = "text-card-minitile" href="#">mini titulo de la noticia o el titulo</a>
                    
                </div>
                <p>radactado por: coquex</p>
                <p class = "sep-line"></p>
        </div>
    </div>

    <div class="card-buttom-publicidad"></div>

    @extends('layouts.footer')

    @section('footer')
    


    @endsection

    <script src="{{ asset('js/index.js') }}" defer></script>
    <!--<script src="{{ asset('js/welcome.js') }}" defer></script>-->
  </body>

</html>