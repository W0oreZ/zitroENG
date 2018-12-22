@extends('layouts/app')

@section('content')

<div class="hero-content">
    <header class="site-header">
        @include('includes/top-contact')
        @include('includes/nav-bar')
    </header><!-- .site-header -->

    <div class="hero-content-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                        <header class="entry-header">
                            <h4>Ouvrer les port du success</h4>
                            <h1>Meuilleur<br />Formations Professionel</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Sociète Zitro-Eng implementé a SAFI est une Sociète Spécialisée dans le domaine des
                                formations professionelles.</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="{{route('inscription')}}">S'inscrire Maintenant</a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .hero-content-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="clients-logo">
            <div class="container">
                <div class="row">
                    <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                        <div class="logo-wrap">
                            <img src="images/logo-1.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-2.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-3.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-4.png" alt="">
                        </div><!-- .logo-wrap -->

                        <div class="logo-wrap">
                            <img src="images/logo-5.png" alt="">
                        </div><!-- .logo-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
    </div><!-- .hero-content-hero-content-overlay -->


</div><!-- .hero-content -->



<div class="container">
    <div class="row">
        <div class="icon-boxes">
            <div class="container-fluid">
                <div class="flex flex-wrap align-items-stretch">
                    <div class="icon-box">
                        <div class="icon">
                            <span class="ti-user"></span>
                        </div><!-- .icon -->

                        <header class="entry-header">
                            <h2 class="entry-title">Obtenir vos certificas</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">S'inscrire Maintenant<i class="fa fa-long-arrow-right"></i></a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .icon-box -->

                    <div class="icon-box">
                        <div class="icon">
                            <span class="ti-folder"></span>
                        </div><!-- .icon -->

                        <header class="entry-header">
                            <h2 class="entry-title">Book Library & Store</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .icon-box -->

                    <div class="icon-box">
                        <div class="icon">
                            <span class="ti-book"></span>
                        </div><!-- .icon -->

                        <header class="entry-header">
                            <h2 class="entry-title">Best Course Online</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .icon-box -->

                    <div class="icon-box">
                        <div class="icon">
                            <span class="ti-world"></span>
                        </div><!-- .icon -->

                        <header class="entry-header">
                            <h2 class="entry-title">Best Industry Leaders</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour.</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </footer><!-- .entry-footer -->
                    </div><!-- .icon-box -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .icon-boxes -->

        <section class="featured-courses horizontal-column courses-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="heading flex justify-content-between align-items-center">
                            <h2 class="entry-title">Nos Formations</h2>

                            <a class="btn mt-4 mt-sm-0" href="#">Voir Tous</a>
                        </header><!-- .heading -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6">
                        <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="images/1.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <div class="course-ratings flex align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->

                                    <h2 class="entry-title"><a href="#">Nom de la formation 1</a></h2>

                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="course-author"><a href="#">Nom de formateur </a></div>

                                        <div class="course-date">date de cour</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->

                                <footer class="entry-footer flex justify-content-between align-items-center">
                                    <div class="course-cost">
                                        a Partire de 1000 DH <span class="price-drop">au lieu de 3000 DH</span>
                                    </div><!-- .course-cost -->
                                </footer><!-- .entry-footer -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6">
                        <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="images/2.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <div class="course-ratings flex align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>

                                        <span class="course-ratings-count">(4 votes)</span>
                                    </div><!-- .course-ratings -->

                                    <h2 class="entry-title"><a href="#">Learn Photoshop, Web Design & Profitable</a></h2>

                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="course-author"><a href="#">Mr. John Wick</a></div>

                                        <div class="course-date">Aug 21, 2018</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->

                                <footer class="entry-footer flex justify-content-between align-items-center">
                                    <div class="course-cost">
                                        $32 <span class="price-drop">$59</span>
                                    </div><!-- .course-cost -->
                                </footer><!-- .entry-footer -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .courses-wrap -->

        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 align-content-lg-stretch">
                        <header class="heading">
                            <h2 class="entry-title">A propos de Zitro ENG</h2>

                            <p>Sociète Zitro-Eng implementé a SAFI est une Sociète Spécialisée dans le domaine des
                                formations professionelles.</p>
                        </header><!-- .heading -->



                        <div class="entry-content ezuca-stats">
                            <div class="stats-wrap flex flex-wrap justify-content-lg-between">
                                <div class="stats-count">
                                    300<span>+</span>
                                    <p>BENEFICIERE INSCRITS</p>
                                </div><!-- .stats-count -->

                                <div class="stats-count">
                                    20<span>+</span>
                                    <p>FORMATIONS PROFESSIONEL</p>
                                </div><!-- .stats-count -->

                                <div class="stats-count">
                                    10<span>+</span>
                                    <p>FORMATEURS</p>
                                </div><!-- .stats-count -->

                                <div class="stats-count">
                                    5<span>+</span>
                                    <p>Nombre de Villes</p>
                                </div><!-- .stats-count -->
                            </div><!-- .stats-wrap -->
                        </div><!-- .ezuca-stats -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">
                        <div class="ezuca-video position-relative">
                            <div class="video-play-btn position-absolute">
                                <a href="{{route('inscription')}}"><img src="images/video-icon.png" alt="Video Play"></a>
                            </div><!-- .video-play-btn -->

                            <img src="images/video-screenshot.png" alt="">
                        </div><!-- .ezuca-video -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .about-section -->
    </div>
</div>


@include('includes.footer')

@endsection
