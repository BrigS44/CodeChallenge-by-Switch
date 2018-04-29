@extends('home.index')

@section('content')
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
                                    <img class="" src="{{ asset('assets/images/code1.jpg') }}" alt="Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-about-right">
                                    <h2>O Code Challenge by Switch</h2>
                                    <p>Code Challange by Switch je projekt natjecateljskog karaktera.
                                        Osnovni cilj projekta je potaknuti studente na praktičnu primjenu znanja iz
                                        područja programiranja. Pravo sudjelovanja na natjecanju imaju svi
                                        studenti Sveučilišta u Mostaru. Studenti se mogu prijaviti samostalno ili u timu
                                        od maksimalno 3 člana,
                                        međutim broj prijava je ograničen.
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
                                        održat će se predstavljanje programskih rješenja pred stručnim žirijem, dok u
                                        poslijepodnevnim satima će biti održano proglašenje pobjednika i dodjela
                                        nagrada.
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
@endsection


<section id="mu-awards">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-pricing-area">

                    <div class="mu-title-area">
                        <h2 class="mu-title">NAGRADE</h2>
                        <p></p>
                    </div>

                    <div class="mu-pricing-conten">
                        <div class="row">

                            <!-- single price item -->
                            <div class="col-md-4">
                                <div class="mu-single-price">

                                    <div class="mu-single-price-head">
                                        <span class="mu-currency"></span>
                                        <span class="mu-rate"> <img
                                                    src="{{ asset('assets/images/silver-medal.png') }}"
                                                    alt="speaker img" width="100px" height="100px">
                                            </span>
                                    </div>
                                    <h3 class="mu-price-title">2. NAGRADA</h3>
                                    <h2>300 KM</h2>

                                </div>
                            </div>
                            <!-- / single price item -->

                            <!-- single price item -->
                            <div class="col-md-4">
                                <div class="mu-single-price">

                                    <div class="mu-single-price-head">
                                        <span class="mu-currency"></span>
                                        <span class="mu-rate"> <img
                                                    src="{{ asset('assets/images/badge.png') }}"
                                                    alt="speaker img" width="100px" height="100px">
                                            </span>
                                    </div>
                                    <h3 class="mu-price-title">1. NAGRADA</h3>
                                    <h2>500 KM</h2>

                                </div>
                            </div>
                            <!-- / single price item -->

                            <!-- single price item -->
                            <div class="col-md-4">
                                <div class="mu-single-price">

                                    <div class="mu-single-price-head">
                                        <span class="mu-currency"></span>
                                        <span class="mu-rate"> <img
                                                    src="{{ asset('assets/images/bronze-medal.png') }}"
                                                    alt="speaker img" width="100px" height="100px">
                                            </span>
                                    </div>
                                    <h3 class="mu-price-title">3. NAGRADA</h3>
                                    <h2>150 KM</h2>

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