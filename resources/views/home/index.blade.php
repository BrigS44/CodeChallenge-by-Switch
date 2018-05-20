<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Challenge by Switch</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/png.png') }}"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">

    <!-- Main Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body

@if(Auth()->user())
onload="teamRegister()"@endif>

<!-- Start Header -->
<header id="mu-hero" class="" role="banner">
    <!-- Start menu  -->
    <nav class="navbar navbar-fixed-top navbar-default mu-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 0px !important; float: right;"><img
                            src="{{ asset('assets/images/switchcc.png') }}" alt="logo img" width="150px" height="70px;"></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mu-menu navbar-right">
                    <li><a href="#mu-about">O nama</a></li>
                    <li><a href="#mu-speakers">Povjerenstvo</a></li>
                    <li><a href="#mu-team">Timovi</a></li>
                    <li><a href="#mu-sponsors">Partneri</a></li>
                    <li><a href="#mu-schedule">Raspored</a></li>
                    <li><a href="#mu-faq">Pravilnik</a></li>
                    <li><a href="#mu-contact">Kontakt</a></li>


                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Prijava') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Registracija') }}</a></li>
                        @else
                            <li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu row" style="width:350px;">
                                    <ol class="col-md-12" >
                                        <div class="col-sm-12" style="padding: 0px !important;">
                                            <div class="header" style="margin-top: 7px; padding: 0px !important;">
                                                <img src="{{ asset('assets/images/profile.png') }}" alt="..."
                                                     height="160px" width="360px" style="padding:0px;">
                                            </div>
                                            <div class="thumbnail"
                                                 style="padding: 0px !important; border-color:transparent;">

                                                <div class="caption">
                                                    <h3 style="color: #D9534F">{{ Auth::user()->name }}</h3>
                                                    <p><i class="lni-envelope"
                                                          style="color: #D9534F;"></i> {{ Auth::user()->email }}</p>
                                                    <p><i class="lni-book"
                                                          style="color: #D9534F;"></i> {{ Auth::user()->index_number }}
                                                    </p>
                                                    <p><i class="lni-phone-handset"
                                                          style="color: #D9534F;"></i> {{ Auth::user()->phone }}</p>
                                                    <p><i class="lni-home"
                                                          style="color: #D9534F;"></i> {{ Auth::user()->faculty }}</p>
                                                    <p><i class="lni-graduation"
                                                          style="color: #D9534F;"></i> {{ Auth::user()->study }}</p>
                                                    <p class="row" style="padding: 0px !important;">

                                                    @if(Auth::user()->type == 'admin')
                                                        <div class="col-md-12"
                                                             style= " padding:0px !important;">
                                                            <a href="{{route('admin_home')}}"
                                                               class="btn btn-default btn-block btn-lg"
                                                               role="button"
                                                               style=" border-color: transparent; border-radius: 0px; border-bottom: solid 1px #D9534F; color: #ef8c8c;"><i
                                                                        class="fa fa-home"></i> Upravljačka ploča</a>
                                                        </div>
                                                        @endif
                                                    <div class="col-md-6"
                                                         style="padding: 0px !important;">
                                                        <a href="{{route('user_uedit')}}/{{Auth::user()->id}}"
                                                           class="btn btn-default btn-block btn-lg"
                                                           role="button"
                                                           style=" border-color: transparent; border-radius: 0px; color: #ef8c8c;"><i
                                                                    class="fa fa-edit"></i> Uredi</a>
                                                    </div>
                                                    <div class="col-md-6"
                                                         style="padding: 0px !important;">
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                           class="btn btn-default btn-block btn-lg"
                                                           style="border: none; border-radius: 0px;border-left: solid 1px #D9534F; color: #ef8c8c;"><i
                                                                    class="fa fa-power-off"></i>
                                                            Odjavi se
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                              method="POST"
                                                              style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </ol>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End menu -->
    <div class="mu-hero-overlay">
        <div class="container">
            <div class="mu-hero-area">

                <!-- Start hero featured area -->
                <div class="mu-hero-featured-area">
                    <!-- Start center Logo -->
                    <div class="mu-logo-area">
                        <!-- text based logo -->
                        <!--<a class="mu-logo" href="#">CODE CHALLANGE by SWITCH</a>-->
                        <!-- image based logo -->
                        <a class="mu-logo" href="#"><img src="{{ asset('assets/images/logoccswitch-large-gray.png') }}"
                                                         alt="logo img"
                                                         width="500px" height="240px"></a>
                    </div>
                    <!-- End center Logo -->

                    <div class="mu-hero-featured-content">

                        <h1><b>#codeForTheFuture</b></h1>
                        <p class="mu-event-date-line" style="font-size: 23px;">24 - 25 Svibanj, 2018. Mostar, BiH</p><br>
                        <p class="mu-event-date-line" style="font-size: 19px;"> Prijave traju do 21. Svibnja</p>
                        <div class="mu-event-counter-area">
                            <div id="mu-event-counter">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- End hero featured area -->

            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Start main content -->
<main role="main">

    <!-- Start About -->
    <section id="mu-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-about-left">
                                    <img class="" src="{{ asset('assets/images/switch3.jpg') }}" alt="Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-about-right">
                                    <h2>O Code Challenge by Switch</h2>
                                    <p>Code Challange by Switch je projekt natjecateljskog karaktera.
                                        Osnovni cilj projekta je potaknuti studente na praktičnu primjenu znanja iz
                                        područja programiranja. Pravo sudjelovanja na natjecanju imaju svi
                                        studenti Sveučilišta u Mostaru. Studenti se mogu prijaviti u timovima
                                        od maksimalno 3 člana.
                                    </p>

                                    <p>Potičemo natjecatelje na izradu open source programskih rješenja. Natjecatelji
                                        mogu svoje ideje izraditi u
                                        obliku web aplikacija, mobilnih aplikacija (Android, iOS), desktop aplikacija
                                        ili API-ja. Dozvoljeno
                                        je korištenje gotovih programskih paketa (frameworks, libraries) i svih
                                        programskih jezika.
                                    </p>

                                    <p>Razvoj software-a je kategorija u kojoj će se studenti natjecati .
                                        Natjecanje je zamišljeno da traje dva dana, gdje će natjecatelji imati jedan dan
                                        za izradu i realizaciju rješenja na određenu temu. Drugog dana u prijepodnevnim
                                        satima
                                        održat će se predstavljanje programskih rješenja pred stručnim žirijem.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Feature Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Video -->
    <section id="mu-video">
        <div class="mu-video-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-video-area">
                            <h2>Pogledajte naš promotivni video</h2>
                            <a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Video content -->
        <div class="mu-video-content">
            <div class="mu-video-iframe-area">
                <a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                <iframe width="854" height="480" src="https://www.youtube.com/embed/acgCzl1-OBk" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>

            </div>
        </div>
        <!-- End Video content -->

    </section>
    <!-- End Video -->

    <!-- Start Why Us -->
    <section id="mu-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-pricing-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">ZAŠTO SUDJELOVATI </h2>
                            <p>Ovim projektom želimo probuditi svijest društva i Sveučilišne zajednice o važnosti i
                                značaju programiranja.
                                Programiranje je cjenjena vještina na tržištu rada, ali programiranje i tehnologija
                                konstantno napreduju
                                pa stoga pojedinac koji posjeduje vještinu programiranja mora konstantno napredovati.
                                Natjecanje je najbolji način otkrivanja kvalitetnih i konkuretnih pojedinaca, a onima
                                koji
                                se ističu nastojimo osigurati bolje uvjete za razvoj i rad.
                            </p>
                        </div>

                        <div class="mu-pricing-conten">
                            <div class="row">

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-users"></i></span>
                                        </div>
                                        <ul>
                                            <li>Timski rad</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-coffee-cup"></i></span>
                                        </div>
                                        <ul>
                                            <li>Komunikacijske vještine</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-laptop-phone"></i></span>
                                        </div>
                                        <ul>
                                            <li>Razvoj software-a</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-graduation"></i></span>
                                        </div>
                                        <ul>
                                            <li>Osobni razvoj i napredak</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-gallery"></i></span>
                                        </div>
                                        <ul>
                                            <li>Prezentacijske vještine</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-heart"></i></span>
                                        </div>
                                        <ul>
                                            <li>Inspiracija</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="fa fa-connectdevelop"></i></span>
                                        </div>
                                        <ul>
                                            <li>Povezivanje s ljudima</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / single price item -->
                                <div class="col-md-3">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-rate"><i class="lni-cup"></i></span>
                                        </div>
                                        <ul>
                                            <li>Vrijedne nagrade</li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us -->

    <!-- Start Speakers -->
    <section id="mu-speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-speakers-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">STRUČNO POVJERENSTVO</h2>
                            <p></p>
                        </div>

                        <!-- Start Speakers Content -->
                        <div class="mu-speakers-content">

                            <div class="mu-speakers-slider">

                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3>dr.sc.Goran Kraljević</h3>
                                        <p>Eronet</p>
                                        <span class="fa fa-envelope"> goran.kraljevic@hteronet.ba </span>
                                        <ul class="mu-single-speakers-social">
                                            <li><a href="https://www.linkedin.com/in/gorankraljevic/"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Start single speaker -->
                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3>Daniel Vasić, v.asist.</h3>
                                        <p>Tajnik studija informatike , FPMOZ</p>
                                        <span class="fa fa-envelope"> daniel.vasic@fpmoz.sum.ba </span>
                                        <ul class="mu-single-speakers-social">
                                            <li><a href="https://www.linkedin.com/in/danielvasic/"><i
                                                            class="lni-linkedin-filled"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End single speaker -->

                                <!-- Start single speaker -->
                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3>dr.sc.Nikola Papac,doc.</h3>
                                        <p>Centar za poduzetništvo SUM</p>
                                        <span class="fa fa-envelope"> nikola.papac@ef.sum.ba</span>
                                        <ul class="mu-single-speakers-social">
                                            <li><a href="https://www.linkedin.com/in/nikola-papac-b168b354/"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End single speaker -->

                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3>Ivan Krešić</h3>
                                        <p>R&D Program Lead - SPARK</p>
                                        <span class="fa fa-envelope"> kresic.ivan@spark.ba</span>
                                        <ul class="mu-single-speakers-social">
                                            <li><a href="https://www.linkedin.com/in/ivan-kresic/"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Start single speaker -->
                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3>Ivan Vučina</h3>
                                        <p> backend developer - NSoft</p>
                                        <span class="fa fa-envelope"> </span>

                                    </div>
                                </div>
                                <!-- End single speaker -->

                                <!-- Start single speaker -->
                                <div class="mu-single-speakers ">
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="speaker img">
                                    <div class="mu-single-speakers-info">
                                        <h3></h3>
                                        <p> predstavnik IT Odjela, Mostar</p>
                                        <span class="fa fa-envelope"> </span>

                                    </div>
                                </div>
                                <!-- End single speaker -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Speakers -->

    <!-- Start themes  -->
    <section id="mu-themes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-pricing-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">TEME</h2>
                            <p>Programska rješenja trebaju biti društveno korisna i svakodnevno primjenjiva iz navedenih
                                područja:</p>
                        </div>

                        <div class="mu-pricing-conten">
                            <div class="row">

                                <!-- single price item -->
                                <div class="col-md-4">
                                    <div class="mu-single-price">

                                        <div class="mu-single-price-head">
                                            <span class="mu-currency"></span>
                                            <span class="mu-rate"><i class="lni-heart-pulse"></i></span>
                                        </div>
                                        <h3 class="mu-price-title">ZDRAVSTVO</h3>
                                        <ul>
                                            <li>Izraditi rješenja s kojim će briga o zdravlju postati pristupačna i
                                                jednostvna.
                                            </li>
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-4">
                                    <div class="mu-single-price mu-popular-price">
                                        <div class="mu-single-price-head">
                                            <span class="mu-currency"></span>
                                            <span class="mu-rate"><i class="lni-graduation"></i></span>
                                        </div>
                                        <h3 class="mu-price-title">EDUKACIJA</h3>
                                        <ul>
                                            <li>Razvoj programskog rješenja koje će poboljšavati i promovirati
                                                edukaciju.

                                            </li>

                                        </ul>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                                <!-- / single price item -->

                                <!-- single price item -->
                                <div class="col-md-4">
                                    <div class="mu-single-price">

                                        <div class="mu-single-price-head">
                                            <span class="mu-currency"></span>
                                            <span class="mu-rate"><i class="lni-leaf"></i></span>

                                        </div>
                                        <h3 class="mu-price-title">EKOLOGIJA</h3>
                                        <ul>
                                            <li>Izraditi programsko rješenje koje će podizati ekološku svijest društva u
                                                kojem se nalazimo.
                                            </li>
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <!-- / single price item -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- start team section-->
    <section id="mu-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-speakers-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">TIMOVI</h2>
                            <p>Za izradu projekta studenti se moraju pobrinuti da sami osiguraju prijenosno računalo i svu dodatnu opremu (zvučnici, kamere, itd.) , kao i pristup alatima i
                                platformama za razvoj softvera. </p>
                            @guest
                            <p>Prije nego prijavite tim, svaki član Vašeg tima mora imati <a  href="{{ route('register') }}"  data-toggle="tooltip" data-placement="bottom" title="Ukoliko niste registrirani, kliknite!" style="color: #d9534f;"><b>registriran</b></a> račun. </p>
                            @endguest
                            @if(Auth()->user())
                                <div class="col-md-4 col-md-offset-4">
                                    <a href="{{route('team_ucreate')}}" class="btn btn-default btn-md "
                                       style="background-color: #D9534F; color: white;">PRIJAVI TIM</a>
                                </div>
                            @endif

                        </div>
                    @if($teams)
                        <!-- Start Speakers Content -->
                            <div class="mu-speakers-content">

                                <div class="mu-speakers-slider">

                                    <!-- Start single speaker -->
                                    @foreach($teams as $team)
                                        <div class="mu-single-speakers" style="text-align: left;">

                                            <div class="thumbnail">
                                                <img src="{{ asset('assets/images/team1.jpg') }}" alt="team"
                                                     style="height: 190px;
                                            width: 100%;
                                            float: left;
                                            border-radius: 0px;
                                            margin-bottom: 20px;">
                                                <div class="caption">
                                                    <h3 style="color: #D9534F;"> "{{$team->teamname}}"</h3>
                                                    <p><i class="lni-user"></i> {{$team->teamleader->name}}</p>
                                                    <p><i class="lni-users"></i> {{$team->team1->name}}
                                                    </p>
                                                    @if($team->team2)
                                                        <p style="margin-left: 20px;">
                                                            {{$team->team2->name}}</p>
                                                        @else
                                                        <p style="margin-left: 20px; height: 20px;">
                                                            </p>
                                                    @endif
                                                    <p><i class="lni-code"></i> {{$team->programingLanguages}}
                                                        i {{$team->enviroment}}</p>

                                                    <p><i class="lni-link"></i> {{$team->linkToCloud}}</p>

                                                    @if(Auth()->user())
                                                        @if(Auth::user()->id == $team->teamleader->id)
                                                    <p><a href="{{route('team_uedit')}}/{{$team->id}}"
                                                          class="btn btn-danger btn-block"
                                                          role="button">Edit</a></p>
                                                            @endif
                                                        @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Speakers Content -->
                        @else
                            <div>
                                <img src="{{ asset('assets/images/team1.jpg') }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section-->

    <!-- Start Sponsors -->
    <section id="mu-sponsors">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-sponsors-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">NAŠI PARTNERI</h2>
                            <p></p>
                        </div>

                        <!-- Start spnonsors brand logo -->
                        <div class="mu-sponsors-content">
                            <!-- prvi red -->
                            <hr>
                            <div class="row col-md-12 " style="vertical-align: middle">

                                <div class="col-md-2 col-sm-5 col-xs-9 " >
                                    <div class="mu-sponsors-single" style="background-color: white;">
                                        <a href="https://www.hteronet.ba/" target="_blank">
                                            <img src="{{ asset('assets/images/eronet.png') }}"
                                             style="padding-top: 23px;">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-5 col-xs-9 ">
                                    <div class="mu-sponsors-single" >
                                        <a href="http://www.sum.ba/" target="_blank">
                                            <img src="{{ asset('assets/images/sum-logo.png') }}"
                                                 alt="IT centar SUM">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-5" >
                                    <div class="mu-sponsors-single">
                                        <a href="https://fpmoz.sum.ba/index.php?lang=hr" target="_blank">
                                            <img src="{{ asset('assets/images/sz4.png') }}"
                                                >
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-5 col-xs-9 ">
                                    <div class="mu-sponsors-single">
                                        <a href="https://fpmoz.sum.ba/index.php?lang=hr" target="_blank">
                                            <img src="{{ asset('assets/images/fpmoz.png') }}" alt="Brand Logo"
                                                 style="background-color: #ffffff;">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-5 col-xs-9 " >
                                    <div class="mu-sponsors-single" style="background-color: white;">
                                        <a href="https://spark.ba/" target="_blank">
                                            <img src="{{ asset('assets/images/spark.png') }}">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-5 col-xs-9 " >
                                    <div class="mu-sponsors-single" style="background-color: white;">
                                        <a href="https://spark.ba/" target="_blank">
                                            <img src="{{ asset('assets/images/katarina.png') }}">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- drugi red -->
                            <div class="row col-md-12 col-md-offset-1">


                                <div class="col-md-2 col-sm-5 col-xs-9 ">
                                    <div class="mu-sponsors-single">
                                        <a href="https://www.orbiter-g.com/" target="_blank">
                                            <img src="{{ asset('assets/images/orbiterg.png') }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-5 col-xs-9">
                                    <div class="mu-sponsors-single">
                                        <a href="https://www.facebook.com/drugi.nacin" target="_blank">
                                            <img src="{{ asset('assets/images/druginacin.png') }}" alt="Brand Logo"
                                                 style="background-color: #ffffff;">
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-5 col-xs-9" >
                                    <div class="mu-sponsors-single">
                                        <a href="http://www.kopirnica-mostar.com/" target="_blank">
                                            <img src="{{ asset('assets/images/kandijaa.png') }}"
                                                 style="margin-left: 20px">
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-5 col-xs-8 " >
                                    <div class="mu-sponsors-single">
                                        <a href="http://www.leda.ba/" target="_blank">
                                            <img src="{{ asset('assets/images/leda.png') }}"
                                                 style="margin-left: 20px">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-5 col-xs-9 " >
                                    <div class="mu-sponsors-single">
                                        <a href="https://www.redbull.com/ba-bs/" target="_blank">
                                            <img src="{{ asset('assets/images/redbull1.png') }}"
                                                 style="margin-left: 20px">
                                        </a>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- End spnonsors brand logo -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sponsors -->

    <!-- Start Venue -->
    <section id="mu-venue">
        <div class="mu-venue-area">
            <div class="row">

                <div class="col-md-6">
                    <div class="mu-venue-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.5448798619423!2d17.794796165466035!3d43.34471187913316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a80ca9687af038b!2sFakultet+prirodoslovno-matemati%C4%8Dkih+i+odgojnih+znanosti!5e0!3m2!1shr!2sba!4v1523299912432"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mu-venue-address">
                        <h3>Fakultet prirodoslovno matematičkih i odgojnih znanosti </h3>
                        <h3>Sveučilište u Mostaru</h3>
                        <h4>Matice hrvatske, Mostar 88000, BiH</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Venue -->

    <!-- Start awards  -->
    <!-- End Pricing -->

    <!-- Start Schedule  -->
    <section id="mu-schedule">
        <div class="container">
            <div class="row">
                <div class="colo-md-12">
                    <div class="mu-schedule-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">Raspored</h2>
                            <p>Prestavljamo Vam detaljan raspored događaja.</p>
                        </div>

                        <div class="mu-schedule-content-area">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mu-schedule-menu" role="tablist">
                                <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day"
                                                                          role="tab" data-toggle="tab">Prvi dan / 24.
                                        Svibnja</a></li>
                                <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab"
                                                           data-toggle="tab">Drugi dan / 25. Svibnja</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content mu-schedule-content">
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.00 </p>
                                                <h3>Registracija</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.30</p>
                                                <h3>Dobrodošlica natjecateljima</h3>
                                                <span>by dr.sc. Tomislav Volarić, doc.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">10.00 </p>
                                                <h3>Početak Code Challenge-a by Switch</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">13.00 - 14.00</p>
                                                <h3>Ručak</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">14.00</p>
                                                <h3>Nastavak Code Challenge-a by Switch</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">17.00 - 17.30</p>
                                                <h3>Pauza</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">17.30</p>
                                                <h3>Nastavak Code Challenge-a by Switch</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">19.30</p>
                                                <h3>Završetak</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.00 </p>
                                                <h3>Registracija</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">9.30</p>
                                                <h3>Prezentacije projektnih rješenja</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">13.00 </p>
                                                <h3>Proglašenje najboljih i dodjela nagrada</h3>
                                                <span></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">13.30 </p>
                                                <h3>Završna riječ</h3>
                                                <span>by dr.sc. Tomislav Volarić,doc.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <p class="mu-event-time">13.45 PM</p>
                                                <h3>Završetak Code Challenge-a by Switch</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schedule -->

    <!-- Start FAQ -->
    <section id="mu-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-faq-area">

                        <div class="mu-title-area">
                            <h2 class="mu-title">PRAVILNIK NATJECANJA</h2>
                            <p>Svi sudionici dužni su pridržavati se odrednica pravilnika.</p>
                        </div>

                        <div class="mu-faq-content">

                            <div class="panel-group" id="accordion">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                               aria-expanded="true">
                                                <span class="fa fa-angle-down"></span> OSNOVNE ODREDNICE NATJECANJA
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>

                                                <ol><b> Organizatori</b></ol>
                                                <ol><p>Code Challenge by Switch je natjecanje iz programiranja koje
                                                        organizira Udruga Switch.</p></ol>
                                                <ol><b>Vrijeme i mjesto održavanja, vremensko trajanje</b></ol>
                                                <ol><p>Natjecanje će se održati u svibnju 2018. godine (24.svibnja i
                                                        25.svibnja).
                                                        Natjecanje traje dva dana (četvrtak i petak). Natjecanje će se
                                                        održavati na Fakultet prirodoslovno matematičkih i odgojnih
                                                        znanosti (FPMOZ), Sveučilište u Mostaru.</p></ol>
                                                <ol><b>Kategorije natjecanja</b></ol>
                                                <ol><p>Razvoj software-a</p></ol>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <span class="fa fa-angle-up"></span>NATJECATELJI PO KATEGORIJAMA
                                                NATJECANJA

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><b>Razvoj software-a</b></ol>
                                                <ol><p>studenti Sveučilišta u Mostaru</p></ol>
                                                <br>
                                                <ol><p>
                                                        U ovoj kategoriji student se može natjecati u timu od maksimalno
                                                        tri člana.
                                                        Svaki tim bira između sebe voditelja projekta.
                                                        Voditelj projekta na stranici putem forme kreira svoj tim,
                                                        upisuje članove tima, itd. (detaljno na web stranici).</p></ol>
                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <span class="fa fa-angle-up"></span> KODEKS PONAŠANJA ORGANIZATORA I
                                                NATJECATELJA
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><p>Organizatori natjecanja Code Challange by Switch ( Udruga Switch
                                                        ) dužni
                                                        su natjecanje provesti stručno i transparentno. Svakome
                                                        natjecatelju
                                                        dužni su dati potpuni uvid u kriterije bodovanja , te na upit,
                                                        omogućiti
                                                        uvid u detalje bodovanja pojedinih natjecateljskih rješenja.
                                                        Natjecatelji dužni su poznavati propozicije natjecanja te se,
                                                        samim
                                                        sudjelovanjem, obvezuju da će ih poštivati.
                                                    </p></ol>
                                                <ol><p>Natjecatelji su dužni odnositi se s poštovanjem prema drugim
                                                        natjecateljima te organizatorima natjecanja. Natjecatelji se
                                                        prije,
                                                        tijekom i poslije samog natjecanja, moraju ponašati u skladu s
                                                        uputama
                                                        organizatora. Natjecatelji imaju pravo organizatorima uložiti
                                                        žalbu na
                                                        bilo koji aspekt natjecanja, ali su dužni prihvatiti i poštovati
                                                        konačan
                                                        odgovor organizatora na istu. Također, natjecatelji su općenito
                                                        dužni
                                                        svojim ponašanjem održavati dignitet natjecanja kako bi ono
                                                        prošlo u
                                                        atmosferi kolegijalnog nadmetanja. Izrazito grube ili učestale
                                                        povrede
                                                        kodeksa ponašanja od strane natjecatelja može se kazniti
                                                        isključivanjem
                                                        prekršitelja iz trenutnog natjecanja te čak i zabranom
                                                        sudjelovanja na
                                                        natjecanjima u sljedećim godinama.
                                                    </p></ol>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                <span class="fa fa-angle-up"></span> MATERIJALNI UVJETI I PROGRAMSKI
                                                ALATI

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><p>Za izradu projekta studenti se moraju pobrinuti da sami osiguraju
                                                        prijenosno računalo i svu dodatnu opremu (zvučnici, kamere,
                                                        itd.) , kao i pristup alatima i platformama za razvoj softvera.
                                                    </p></ol>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                <span class="fa fa-angle-up"></span> PRIJAVA ZA NATJECANJE
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><p>Prijava za natjecanje odvija se putem internetskog sučelja na
                                                        internetskom sjedištu link.
                                                        Prijave na natjecanje počinju 20. travnja i traju 30 dana (20.
                                                        svibnja).
                                                    </p></ol>
                                                <ol><b>Tijek prijave:</b></ol>
                                                <ol><p>Svi sudionici natjecanja (studenti ) trebaju imati svoj račun
                                                        putem kojeg se prijavljuju u sustav (odabrati Prijava). Ako se
                                                        prvi put prijavljuju u sustav trebaju izvršiti registraciju
                                                        (odabrati Registracija), zapamtiti svoje pristupne podatke, a
                                                        zatim se prijaviti u sustav.
                                                    </p></ol>
                                                <ol><p>Student koji je voditelj tima, obavezan je kreirati tim putem
                                                        internetskog sučelja
                                                    </p></ol>
                                                <ol><b>Potrebni podaci za studenta su:
                                                    </b></ol>
                                                <ol><p>ime i prezime,
                                                        e-mail adresa učenika,
                                                        kontakt telefon,
                                                        fakultet na kojem je natjecatelj student,
                                                        studijska grupa,
                                                        broj indeksa.
                                                    </p></ol>
                                                <ol><b>Potrebne informacije o timu su:
                                                    </b></ol>
                                                <ol><p>naziv tima,
                                                        ime i prezime voditelja tima,
                                                        imena i prezimena članova tima,
                                                        platforme za razvoj software-a koje će tim koristiti,
                                                        link učitanog programskog rješenja na CloudSoftware-u.

                                                    </p></ol>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                <span class="fa fa-angle-up"></span> DEFINIRANJE PORETKA I PRIZNANJA

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><p>Detalji načina provedbe natjecanja, za svaku kategoriju ,
                                                        pravovremeno će biti objavljeni na internetskom sjedištu
                                                        natjecanja. To uključuje točno definiranje svih koraka od
                                                        preuzimanja zadataka do objavljivanja službene ljestvice
                                                        poretka. Ljestvica poretka se radi po načelu postojanja svih
                                                        mjesta bez obzira koliko učenika dijelilo pojedino mjesto.

                                                    </p></ol>

                                                <ol><p>Svi natjecatelji dobivaju zahvalnice za sudjelovanje na
                                                        natjecanju Code Challenge by Switch. Studenti koji su osvojili
                                                        jedno od prvih triju mjesta dobivaju priznanja s upisanim
                                                        osvojenim mjestom.

                                                    </p></ol>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                                <span class="fa fa-angle-up"></span> NAČIN PROVOĐENJA NATJECANJA I
                                                KRITERIJ BODOVANJA

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <ol><b>Razvoj softvera:
                                                    </b></ol>
                                                <ol><p>DStudenti svoje software-ske projekte mogu izraditi u bilo kojem
                                                        programskom jeziku i mogu se koristiti gotovim programskim
                                                        paketima (bibliotekama, framework).
                                                        Svaki rad, neovisno sadrži li gotove programske pakete ili ne,
                                                        mora
                                                        sadržavati određeni dio osobnog programskog koda pri čemu se
                                                        vrednuje osobni rad i inovativnost cjelokupnog rješenja.
                                                    </p></ol>

                                                <ol><p>SAko se na bilo kojoj razini natjecanja u kategoriji Razvoj
                                                        softvera utvrdi da je student koristio dijelove tuđeg rada, bit
                                                        će diskvalificiran i kažnjen zabranom nastupanja na minimalno 1
                                                        (jednu) godinu. Iste odredbe primijenit će se na sve članove
                                                        tima ako se utvrdi da je u izradi projekta sudjelovao netko tko
                                                        službeno nije prijavljen kao član tima.
                                                        Za izradu rada učenici mogu koristiti bilo koju njima dostupnu
                                                        računalnu platformu. Stručno povjerenstvo pratiti će
                                                        predstavljanje i ocjenjivati projekte. Stručno povjerenstvo koja
                                                        će pregledavati radove ocjenjivat će projekte prema sljedećim
                                                        kategorijama i pripadajućim elementima:
                                                    </p></ol>
                                                <ol><b>1.Ideja (40%)</b></ol>

                                                <ol><b>2.Tehnička izvedba(40%)</b></ol>

                                                <ol><b>3.Dizajn (10%)</b></ol>

                                                <ol><b>4. Prezentacija i dokumentacija(10%)</b></ol>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area col-md-10">

                        <div class="mu-title-area">
                            <h2 class="mu-heading-title">KONTAKTIRAJTE NAS</h2>
                            <p>Pitanja, pohvale ili zamjerke možete slati na našu kontakt formu. Unaprijed se
                                zhavaljujemo na svim povratnim informacijama. </p>
                            <p>Polja označena zvjezdicom ( * ) je obavezno ispuniti.</p>
                        </div>

                        <!-- Start Contact Content -->

                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-contact-form-area">
                                        <div id="form-messages"></div>
                                        <form id="ajax-contact" method="POST" action="{{url('contact')}}"
                                              class="mu-contact-form">
                                            @csrf
                                            <div class="form-group col-md-6">
                                                <label for="name" style="float: left;">Ime i prezime</label>
                                                <p style="color:red; float: left;">*</p>
                                                <input type="text" class="form-control" placeholder="Ime i prezime"
                                                       id="name"
                                                       name="name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name" style="float: left;">Email</label>
                                                <p style="color:red; float: left;">*</p>
                                                <input type="email" class="form-control" placeholder="Email adresa"
                                                       id="email" name="email" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name" style="float: left;">Predmet poruke</label>
                                                <p style="color:red; float: left;">*</p>
                                                <input type="text" class="form-control" placeholder="Predmet"
                                                       id="subject" name="subject" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name" style="float: left;">Poruka</label>
                                                <p style="color:red; float: left;">*</p>
                                                <textarea class="form-control" placeholder="Sadržaj poruke" id="message"
                                                          name="message" required></textarea>
                                            </div>
                                            <button type="submit" class="mu-send-msg-btn" value="Send Message"><span>POŠALJI</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Contact Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

</main>

<!-- End main content -->


<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-footer-top">
                <div class="mu-social-media">
                    <a href="https://www.facebook.com/switchmostar/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/udrugaswitch/" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                    <a href="udrugaswitch@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="mu-footer-bottom" style="color: #fff;">
                <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://markups.io"
                                                             style="color:#d9534f"> < / Switch > </a>.
                    All right reserved.</p>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Event Counter -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>

<script>
    function teamRegister() {
        if (window.confirm('PRIJAVITE SVOJ TIM! ' +
                'Klikom na "OK" otvorit će Vam se forma za prijavu tima! '))
        {
            window.location.href='{{route('team_ucreate')}}';
        };

    }
</script>

<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>