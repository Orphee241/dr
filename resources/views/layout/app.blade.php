<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="L'ONG Dynamique Régionale traite des questions de l'Intégration Régionale en Afrique Centrale">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/layerslider.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/slick.min.css")}}">

    <title>Dynamique Régionale, l'ONG n°1 dans les questions relatives à l'Intégration Régionale en Afrique Centrale</title>
    <meta name="keywords" content="Intégration Régionale, Afrique Centrale, CEMAC, CEEAC, Libreville, GABON, CAMEROUN, CONGO, RDC, TCHAD" />
{{--     <meta name="robots" content="INDEX,FOLLOW"> --}}

    <!-- Mobile Specific Metas -->
{{--     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}

    <!-- Favicons - Place favicon.ico in the root directory -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    @vite(['public/css/style.css'])

</head>

<body>

    @include("navbar.navbar")

    @yield('content')


<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/layerslider.utils.js')}}"></script>
<script src="{{asset('js/layerslider.transitions.js')}}"></script>
<script src="{{asset('js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>





</body>

</html>
