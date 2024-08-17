@extends('layout.app')

@section('title')
    Yo GONA
@endsection

@section('content')

    <!--==============================
            Hero Area
          ==============================-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ URL::to('img/bg/sitebanner2.jpg') }}" class="ls-bg"
                    alt="hero-bg" />
                <div style="font-size:36px; color:#ff0000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(0, 255, 81, 0.066); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(187, 202, 241, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Bienvenue
                </h1>
                <h1 style="overflow: wrap; top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:25px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    Au coeur de l'Intégration Régionale en Afrique Centrale
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Dynamique Régionale (DR) est une ONG mènant ses activités depuis 2021 au Gabon, conformément aux dispositions de la
                    loi n°035/62 du 10 décembre 1962 relative aux Associations en République gabonaise. </div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">Qui sommes-nous ?<i
                                class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">Notre Mission<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    WE HAVE TOP IT EXPERT</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST IT SERVICE &amp;
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION 2022
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST IT SERVICE &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION 2022
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#next" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:1685px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-right"></i></span>
                    </div>
                </a>
                <a class="ls-l ls-hide-tablet ls-hide-phone" href="#prev" target="_self" data-ls="static:forever;">
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:50%;"
                        class="ls-html-layer">
                        <span class="icon-btn style2"><i class="far fa-arrow-left"></i></span>
                    </div>
                </a>
            </div>
            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ URL::to('img/bg/sitebanner2.jpg') }}" class="ls-bg"
                    alt="hero-bg" />
                <div style="font-size:36px; color:#ff0000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(0, 255, 81, 0.066); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(187, 202, 241, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Bienvenue
                </h1>
                <h1 style="overflow: wrap; top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:25px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    Au coeur de l'Intégration Régionale en Afrique Centrale
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Dynamique Régionale (DR) est une ONG mènant ses activités depuis 2021 au Gabon, conformément aux dispositions de la
                    loi n°035/62 du 10 décembre 1962 relative aux Associations en République gabonaise.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">Qui sommes-nous ?<i
                                class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">Notre mission<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    PROVIDE FREE CONSULTATION</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TOP IT SUPPORT
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    &amp; MANAGEMNT
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TOP IT SUPPORT
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    &amp; MANAGEMNT
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ URL::to('img/bg/sitebanner2.jpg') }}" class="ls-bg"
                    alt="hero-bg" />
                <div style="font-size:36px; color:#ff0000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 245, 68, 0.107); top:-473px; left:51px;"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;">
                </div>
                <div style="font-size:36px; color:#ff0000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);"
                    class="ls-l ls-text-layer d-hd-none"
                    data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;">
                </div>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Bienvenue
                </h1>
                <h1 style="overflow: wrap; top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:25px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    Au coeur de l'Intégration Régionale en Afrique Centrale
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Dynamique Régionale (DR) est une ONG mènant ses activités depuis 2021 au Gabon, conformément aux dispositions de la
                    loi n°035/62 du 10 décembre 1962 relative aux Associations en République gabonaise.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">Qui sommes-nous ?<i
                                class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">Notre mission<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Bienvenue
                </h1>
                <h1 style="overflow: wrap; top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:25px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    Au coeur de l'Intégration Régionale en Afrique Centrale
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    TEAM OF LEGENDS &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    PRO ENGINERS
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div data-bg-src="{{ URL::to('/img/bg/ab-bg-1-1.jpg') }}">
        <!--==============================
          Features Area
          ==============================-->
        <section class="feature-wrap1  space-top space-extra-bottom">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="img/icon/fe-1-1.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Development
                                    Services</a></h3>
                            <p class="feature-text">Completely implement via highly efficient process improvements.
                                engage high value before progressive data.</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="img/icon/fe-1-2.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Marketing
                                    Services</a></h3>
                            <p class="feature-text">Completely implement via highly efficient process improvements.
                                engage high value before progressive data.</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="img/icon/fe-1-3.png" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Consulting
                                    Services</a></h3>
                            <p class="feature-text">Completely implement via highly efficient process improvements.
                                engage high value before progressive data.</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
          About Us
          ==============================-->
        <section class="position-relative space-bottom">
            <span class="about-shape1 d-none d-xl-block">TechBiz</span>
            <div class="container z-index-common">
                <div class="row gx-60">
                    <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img src="img/about/ab-1-1.jpg" alt="About image">
                            </div>
                            <div class="img-2">
                                <img src="img/about/ab-1-2.jpg" alt="About image">
                                <a class="play-btn style2 position-center popup-video"
                                    href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class=""><i
                                            class="fas fa-play"></i></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                        <h2 class="sec-title h1">Trust Our Best IT Solution For Your Business</h2>
                        <p class="mb-4 mt-1 pb-3">Compellingly mesh cross-platform portals through functional human
                            capital world-class architectures for orthogonal initiatives. Assertively benchmark
                            visionary quality vectors after covalent e-tailers. Intrinsicly enhance 24/7 users and
                            supply process</p>
                        <div class="call-media">
                            <div class="call-media__icon"><img src="img/icon/tel-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="call-media__label">24 HOURS SERVICE AVAILABLE</span>
                                <p class="call-media__info">Call Us: <a href="tel:+6668880000">+(666) 888 0000</a></p>
                            </div>
                        </div>
                        <a href="about.html" class="vs-btn">About Us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--==============================
          Service Area
          ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="img/bg/sr-bg-1-1.png">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="sec-subtitle">Nos activités</span>
                        <h2 class="sec-title h1">Le Genre d'Activités que nous menons</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-1.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Juridique</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-2.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Economique</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-3.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Sociale</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-4.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Culturel</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-5.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Environnementale</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="img/icon/sr-icon-1-6.png" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Etique et Scientifique</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                            with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Lire plus<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          Counter Area
          ==============================-->
    <div class="position-relative ">
        <div class="counter-shape1"></div>
        <div class="bg-black z-index-common space" data-bg-src="img/bg/counter-bg-1-1.jpg">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="img/icon/count-1-1.png" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">858</span>
                                <p class="counter-media__title text-white">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="img/icon/count-1-2.png" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">650</span>
                                <p class="counter-media__title text-white">Media Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="img/icon/count-1-3.png" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">567</span>
                                <p class="counter-media__title text-white">Skilled Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="img/icon/count-1-4.png" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">28k</span>
                                <p class="counter-media__title text-white">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
          Team Area
          ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Une Equipe Dynamique</span>
                        <h2 class="sec-title h1">Notre Equipe est constituée d'Expert</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="img/team/t-1-1.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Daniel Matthew</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="img/team/t-1-2.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Grayson Gabriel</a>
                            </h3>
                            <p class="team-degi">Head Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="img/team/t-1-3.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Alexander Mason</a>
                            </h3>
                            <p class="team-degi">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="img/team/t-1-4.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Maverick Cameron</a>
                            </h3>
                            <p class="team-degi">Pro Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="img/team/t-1-5.jpg" alt="image"></a>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="team-details.html">Marian Widjya</a>
                            </h3>
                            <p class="team-degi">Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          FAQ Area
          ==============================-->
    
    <!--==============================
          Skill Area
          ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-5 col-xxl-auto mb-30 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/skill/skill-1-1.jpg" alt="Skill image">
                </div>
                <div class="col-lg-7 col-xxl-6 me-xl-auto">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>The Great Company Skill</span>
                    <h2 class="sec-title h1">Connecting People And Build Technology</h2>
                    <p class="mb-4 pb-1">Energistically evisculate an expanded array of meta-services after cross-media
                        strategic theme areas. Interactively simplify interactive customer service before fully tested
                        relationship parallel task high standards...</p>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Security</h3>
                        <span class="progress-box__number">65%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Career Development</h3>
                        <span class="progress-box__number">88%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 88%" aria-valuenow="88"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Inovation</h3>
                        <span class="progress-box__number">90%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          CTA Area
          ==============================-->
    <section class="z-index-common space" data-bg-src="img/bg/cta-bg-1-1.jpg">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          Work Process
          ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="img/bg/process-bg-1-1.jpg" id="processv1">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Great Team Members</span>
                        <h2 class="sec-title h1">We Have Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="img/icon/process-1-4.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">Medicine Help</h3>
                    <p class="process-text">Extensible for web iterate process before meta services impact with
                        olisticly enable client.</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="img/icon/process-1-1.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">We Build and Create</h3>
                    <p class="process-text">Extensible for web iterate process before meta services impact with
                        olisticly enable client.</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="img/icon/process-1-2.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">Water Delivery</h3>
                    <p class="process-text">Extensible for web iterate process before meta services impact with
                        olisticly enable client.</p>
                </div>
                <div class="col-sm-6 col-lg-3 process-style1">
                    <div class="process-arrow"><img src="img/icon/process-arrow-1-1.png" alt="arrow"></div>
                    <div class="process-icon">
                        <img src="img/icon/process-1-3.png" alt="icon">
                        <span class="process-number">01</span>
                    </div>
                    <h3 class="process-title h5">We Care About</h3>
                    <p class="process-text">Extensible for web iterate process before meta services impact with
                        olisticly enable client.</p>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          Testimonial Area
          ==============================-->

    <!--==============================
          Brand Section
          ==============================-->
    <section class=" space-bottom">
        <div class="container">
            <div class="sec-line-wrap">
                <div class="sec-line"></div>
                <h2 class="sec-title2">Nos partenaires</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                data-xs-slide-show="2">
                <div class="col-auto"><img src="img/brand/br-1-1.png" alt="Brand"></div>
                <div class="col-auto"><img src="img/brand/br-1-2.png" alt="Brand"></div>
                <div class="col-auto"><img src="img/brand/br-1-3.png" alt="Brand"></div>
                <div class="col-auto"><img src="img/brand/br-1-4.png" alt="Brand"></div>
                <div class="col-auto"><img src="img/brand/br-1-5.png" alt="Brand"></div>
                <div class="col-auto"><img src="img/brand/br-1-6.png" alt="Brand"></div>
            </div>
        </div>
    </section>
    <!--==============================
          Blog Area
          ==============================-->
    <section class="vs-blog-wrapper  space-top space-extra-bottom" data-bg-src="img/bg/blog-bg-1-1.jpg">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Découvrez notre</span>
                        <h2 class="sec-title h1">Actualité</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="img/blog/blog-1-1.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Contrary to popular belief ipsum
                                        is not simply </a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="img/blog/blog-1-4.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>30 Mar, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Lorem ipsum placeholder text
                                        commonly used</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="img/blog/blog-1-2.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>31 Jul, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">From its medieval to the digital
                                        learn everything</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="img/blog/blog-1-3.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>26 Aug, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Global Business Goal Make Life
                                        Easy From Tech</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
            Footer Area
        ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="img/shape/bg-footer-1-1.jpg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Adresse</span>
                                <div class="footer-info_link">Libreville, Estuaire-Gabon</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Horaires</span>
                                <div class="footer-info_link">Du lundi au vendredi <span style="visibility: hidden"> jkk</span> De 08h à 16H</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Contacts</span>
                                <div class="footer-info_link"><a href="mailto:info@techbiz.com">contact@dynamiqueregionale.</a><br><a
                                        href="tel:+2597462153">(+241) 77187894</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">A propos de nous</h3>
                            <div class="vs-widget-about">
                                <p class="footer-text">Retrouvez nous également sur nos différentes plateformes pour ne
                                    rien rater.</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Liens</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">A propos de nous</a></li>
                                    <li><a href="#">Notre Mission</a></li>
                                    <li><a href="#">Nos Projets</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Explorez</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Nos services</a></li>
                                    <li><a href="#">Notre histoire</a></li>
                                    <li><a href="#">Actualités</a></li>
                                    <li><a href="#">Aide</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Localisation</h3>
                            <div class="footer-map">
                                <iframe title="office location map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd"
                                    width="200" height="180" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a
                        class="text-white" href="index.html">Dynamique Régionale</a>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
@endsection
