<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" version="XHTML+RDFa 1.0" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="responsejs  forzar-scroll">

<!--Head-->
<head> 
    <!-- Google Tag Manager -->
	<!-- End Google Tag Manager -->
    <title>KMB</title> 
        <link runat="server" id="IMGfavicon" rel="shortcut icon" type="image/ico"> 
        <link rel="canonical" href="localhost/PwLaravel/public"> 
		<link rel="alternate" hreflang="es" href="localhost/PwLaravel/public">
		<link rel="alternate" hreflang="en" href="localhost/PwLaravel/public">

        <!-- CSS y Js original -->
        <link media="all" type="text/css" rel="stylesheet" href="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/css/tema_edicion.css?v=3.0.0010_20230202a-6"> 

        <link media="screen" type="text/css" rel="stylesheet" href="//cloud.typography.com/7751072/662984/css/fonts.css"> 
        <link media="screen" type="text/css" rel="stylesheet" href="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/community.css?v=3.0.0010_20230202a-6"> 


        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/unificado.js?v=3.0.0010_20230202a"></script>
    
	<!-- Codigo comun -->
        <link media="all" type="text/css" rel="stylesheet" href="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/tooltips/bs/bootstrap.min.css?v=16"> 
        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/tooltips/bs/bootstrap.min.js?v=16"></script> 
        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/templates/common.js?v=3.0.0010_20230202a" defer="defer"></script> 
        <script type="text/javascript" src="https://static.cdnprado.net/js/unificado.js?v=3.0.0010_20230202a"></script>
        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/freewall.js?v=3.0.0010_20230202a-16" defer="defer"></script> 

        <script type="text/javascript" src="https://static.cdnprado.net/lang/es/text.js?v=3.0.0010_20230202a"></script>
        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/jquery.scrollsteps-full-min.js?v=16"></script> 


		<script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/ElPrado/js/jquery.scrollsteps-full-min.js?v=3.0.0010_20230202a"></script> 

        <script type="text/javascript" src="https://content3.cdnprado.net/imagenes/proyectos/personalizacion/7317a29a-d846-4c54-9034-6a114c3658fe/community.js?v=3.0.0010_20230202a-16"></script> 

        <!--TIMELINE-->
        <body class="home" style=""><input type="hidden" id="inpt_url_external_service" value="https://servicios.museodelprado.es/servicioexterno">
        <input type="hidden" id="inpt_url_cronoscopio" value="https://www.museodelprado.es/coleccion/linea-del-tiempo"> 

        <meta name="apple-mobile-web-app-capable" content="yes">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
                <meta name="robots" content="all">
                <meta name="description" content="Página Web de KMB">

            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K9VTZ3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript)  -->

            <form method="post" target="_blank" action="" name="myform" id="myform">
                <input type="text" style="display: none;" name="query" id="query">
                <input type="text" style="display: none;" name="pagina" id="pagina">
                <a style="display: none;" id="rdfHack" href="javascript:submitform();">RDF</a>
            </form>

            <div style="width: 100px; height: 100px; position: absolute; display: none; left: 0px; top: 0px; z-index: 2000" class="popup">
                <img style="border-width: 0px;" alt="Cargando..." src="https://static.cdnprado.net/img/espera.gif">
                <p><strong>Cargando...</strong></p>
            </div>
            <div id="txtAux" class="oculto">
                <div class="RECORRIDOCREADO">El recorrido &lt;em&gt;TITULORECORRIDO&lt;/em&gt; se ha creado correctamente. Añade obras desde la página de Colección</div>
                <div class="OBRAANIADIDAARECORRIDO">Añadido &lt;em&gt;TITULOOBRA&lt;/em&gt; en el recorrido &lt;em&gt;TITULORECORRIDO&lt;/em&gt;</div>
            </div>
            <div style="display: none; z-index: 1999; width: 100%; top: 0px; left: 0px; position: absolute; height: 2900px;" id="mascaraBlanca"></div>

    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('/css/Home.css') }}"> 
</head>
<!--Incluimos el Menu-->
@extends('layouts.nav')
@section('nav_content')
@endsection


<!-- Carrusel y Enlaces -->
<section class="rec-novedades" style="display: none;">
    <p></p>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        if ($(window).width() >= 768) {
            $('.abiertoDesktop').addClass('abierto');
        }
    });
</script>

<section>          

<style>
    .destacado-home div {
    width:90%;
    }
    .destacado-home div h1 {
    font-size: 1.6em;
    }
    .destacado-home div h3 {
    font-size: 1em;
    }

    @media screen and (min-width: 750px) {
    .destacado-home div h1 {
        font-size: 2.5em;
    }
    }
    @media screen and (max-width: 750px) and (orientation: landscape) {
    .destacado-home div h1 {
        font-size: 1.6em;
        margin: 4px 0;
    }
    .destacado-home div h2 {
        font-size: .5em;
    }
    .destacado-home div h3 {
        font-size: .7em;
    }
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {$('body').addClass('home'); $('header').addClass('home'); $('#header.header').addClass('home'); });
</script>

<script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<iframe src="https://12554634.fls.doubleclick.net/activityi;src=12554634;type=mdprado;cat=mdphp;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>

<iframe src="https://12554634.fls.doubleclick.net/activityi;src=12554634;type=mdprado;cat=mdphp;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=7477423420599.785?" width="1" height="1" frameborder="0" style="display:none">
</iframe>
<noscript>
    <iframe src="https://12554634.fls.doubleclick.net/activityi;src=12554634;type=mdprado;cat=mdphp;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?" width="1" height="1" frameborder="0" style="display:none">
    </iframe>
</noscript>			
</section>              

<!-- Primera Imagen -->
<section class="destacado-home" id="dst1" style="height: 952px;">          	
<div class="aba mid claro">
		<h2>Ven a disfrutar de nuestras instalaciones deportivas y conviértete en parte de nuestra comunidad activa y saludable.</h2>
		<h1 class="no-mays"><a href="{{ route('pistas') }}">Instaciones Deportivas</a></h1>
		<h3>desde 2023</h3>	
</div>
	<figure data-img="https://s1.1zoom.me/b6162/218/Basketball_Ball_544514_1920x1080.jpg" data-img-small="https://s1.1zoom.me/b6162/218/Basketball_Ball_544514_1920x1080.jpg" style="position: relative; z-index: 0; background: none;">

        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 952px; width: 133px; z-index: -999998; position: absolute;"><img alt="" src="https://s1.1zoom.me/b6162/218/Basketball_Ball_544514_1920x1080.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1269.33px; height: 952px; max-height: none; max-width: none; z-index: -999999; left: -568.167px; top: 0px;"></div>
    </figure>
    <a class="siguiente"></a>			
</section>              

<!-- Segunda Imagen -->
<section class="destacado-home" id="dst2" style="height: 952px;">          
<div class="aba mid claro">
	<h2 style="color:white;">¡A competir y disfrutar juntos!</h2>
	<h1 class="no-mays"><a href="#">Karting</a></h1>
</div>	
	<figure data-img="https://www.vroomkart.es/sites/vroomkart.com/files/www.vroomkart.es/academy.JPG" data-img-small="https://www.vroomkart.es/sites/vroomkart.com/files/www.vroomkart.es/academy.JPG" style="position: relative; z-index: 0; background: none;">

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 952px; width: 133px; z-index: -999998; position: absolute;">
    <img alt="" src="https://www.vroomkart.es/sites/vroomkart.com/files/www.vroomkart.es/academy.JPG" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1269.33px; height: 952px; max-height: none; max-width: none; z-index: -999999; left: -568.167px; top: 0px;">
</div></figure>
    <a class="siguiente"></a>			
</section>              

<!-- 3 Imagen -->
<section class="destacado-home" id="dst3" style="height: 952px;">          
<div class="aba der claro">
	<h2 style="color:white;">Inscripción abierta</h2>
	<h1 class="no-mays"><a href="#">Escuela de Verano de KMB</a></h1>
			<h3 style="color:white;">Del 3 al 7 de julio de 2023</h3>
</div>	
<figure data-img="https://images6.alphacoders.com/550/550393.jpg" data-img-small="https://images6.alphacoders.com/550/550393.jpg" style="position: relative; z-index: 0; background: none;">

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 952px; width: 133px; z-index: -999998; position: absolute;">
    <img alt="" src="https://images6.alphacoders.com/550/550393.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1269.33px; height: 952px; max-height: none; max-width: none; z-index: -999999; left: -568.167px; top: 0px;">
</div></figure>		
</section>              

<section id="dst9"></section>              
<div id="volver-arriba" style="display: none;"><a href="#">Arriba</a></div>

<!--Footer -->
    @extends('layouts.footer')
    @section('footer_content')
    @endsection

<!-- Cargar Scripts Iniciales -->
<script type="text/javascript">
    $(document).ready(function () {
            EjecutarScriptsIniciales2();
    });

</script>