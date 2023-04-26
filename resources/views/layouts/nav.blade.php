
<!-- Barra de Navegacion y Menu -->
<header class="home">
    <div class="logo"><a href="{{ route('home') }}">KMB</a></div>
    <nav>
        <a href="{{ route('pistas') }}" class="texto entrada">Pistas</a>
        <a class="open-popup-metasearch bt_buscar" href="{{ route('login') }}"><span>Iniciar Sesion</span></a>
        <a class="ico_menuppal abrir"><span>Menú&lt;</span></a>
    </nav>
</header>

<script language="javascript">
    function subMenuDesp(e, clase) {
        $(e).toggleClass('off');
        $("." + clase).slideToggle(500);
    }
</script>
<nav id="header" class="header home">
    <form style="display:none" method="post" id="formLogin" action="https://servicios.museodelprado.es/login/login.aspx?token=Vnq2IhLNBGXZWtJknqirvDZz6KWkyW0ZJ6s3Nx7uBEU%253d&amp;proyectoID=7317a29a-d846-4c54-9034-6a114c3658fe">
        <input type="text" name="usuario" title="Usuario" id="usuario">
        <input type="text" name="password" title="Contraseña" id="password">
    </form>
    <ul>
        <li class="lang">
                    <a class="on" href="#">ES</a>
|                    <a href="https://www.museodelprado.es/en">EN</a>

        </li>
                    <li class="">
                        <a href="{{ route('home') }}">KMB</a>
                            <span class="bt_desp" onclick="subMenuDesp(this, 'visita_sub')">+</span>
                            <div class="visita_sub submenu">
                                <ul>
                                                    <li class=""><a href="{{ route('pistas') }}">Pistas</a></li>
                                                    <li class=""><a href="{{ route('eventos') }}">Eventos</a></li>
                                                    <li class=""><a href="#">Recomendaciones</a></li>
                                                    <li class=""><a href="#">Cómo llegar</a></li>

                                </ul>
                            </div>
                    </li>
                    <li class=" newcol">
                        <a href="{{ route('pistas') }}">Pistas</a>
                            <span class="bt_desp" onclick="subMenuDesp(this, 'colección_sub')">+</span>
                            <div class="colección_sub submenu">
                                <ul>
                                                    <li class=""><a href="#">Pista Fútbol 11</a></li>
                                                    <li class=""><a href="#">Pista Fútbol 7</a></li>
                                                    <li class=""><a href="#">Pista Fútbol sala</a></li>
                                                    <li class=""><a href="#">Pista Baloncesto</a></li>
                                                    <li class=""><a href="#">Pista Pádel</a></li>
                                                    <li class=""><a href="#">Pista de Tenis</a></li>
                                </ul>
                            </div>
                    </li>
                    <li class=" newcol">
                        <a href="{{ route('circuitos') }}">Circuitos</a>
                            <span class="bt_desp" onclick="subMenuDesp(this, 'colección_sub')">+</span>
                            <div class="colección_sub submenu">
                                <ul>
                                                    <li class=""><a href="#">Circuito de Karting</a></li>
                                </ul>
                            </div>
                    </li>
                    <li class="">
                        <a href="{{ route('eventos') }}">Eventos</a>
                            <span class="bt_desp" onclick="subMenuDesp(this, 'actualidad_sub')">+</span>
                            <div class="actualidad_sub submenu">
                                <ul>
                                                    <li class=""><a href="#">Eventos Deportivos</a></li>
                                                    <li class=""><a href="#">Noticias</a></li>
                                </ul>
                            </div>
                    </li>
        <li class="abajo">
            <ul class="segundo is-visible">
                <li class="rrss facebook"><a href="https://www.facebook.com/museonacionaldelprado">Facebook</a></li>
                <li class="rrss twitter"><a href="https://twitter.com/museodelprado">Twitter</a></li>
                <li class="rrss insta"><a href="https://www.instagram.com/museoprado/">Instagram</a></li>
                <li class="rrss youtube"><a href="https://www.youtube.com/user/museodelprado">Youtube</a></li>
                <li class="rrss tiktok"><a href="https://www.tiktok.com/@museodelprado">TikTok</a></li>
            </ul>
        </li>
    </ul>
</nav>
@yield('nav_content')