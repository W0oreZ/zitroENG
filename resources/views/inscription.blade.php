@extends('layouts.app')

@section('content')


<div class="hero-content">
    <header class="site-header">
            @include('includes.nav-bar')
    </header>
</div>

<div class="col-12">
    <div class="breadcrumbs">
        <ul class="flex flex-wrap align-items-center p-0 m-0">
            <li><a href="/"><i class="fa fa-home"></i> Acceuil</a></li>
            <li>Inscription</li>
        </ul>
    </div><!-- .breadcrumbs -->
</div><!-- .col -->
<div class="container">
        <div class="row">
<div class="col-12 col-lg-6">
    <div class="contact-form">
        <h3>Inscription </h3>

    <form action="{{route('registration')}}" method="POST">
        @csrf
            <input type="text" name="firstname" placeholder="NOM">
            <input type="text" name="lastname" placeholder="PRENOM">
            <input type="text" name="cin" placeholder="CIN">
            <input type="text" name="dn" placeholder="DATE NAISSANCE ex. 02/10/1994">
            <input type="email" name="email" placeholder="EMAIL ex. NOM.PRENOM@GMAIL.COM">
            <input type="text" name="telephone" placeholder="NUMERO TELEPHONE">
            <hr>
            <input type="submit" class="form-control" value="s'Inscrire">
        </form>
    </div><!-- .contact-form -->
</div><!-- .col -->

<div class="col-12 col-lg-6">
    <div class="contact-info">
        <h3>Contact & Information</h3>

        <p>Sociète Zitro-Eng implementé a SAFI est une Sociète Spécialisée dans le domaine des formations professionelles. </p>

        <ul class="p-0 m-0">
            <li><span>Atelier:</span>D. Route Du Djorf , BP.209 - SAFI Maroc</li>
            <li><span>Email:</span><a href="#">Zitro.ENG01@gmail.com</a></li>
            <li><span>Phone:</span><a href="#">(+212) 681-747000</a></li>
        </ul>
    </div><!-- .contact-info -->
</div><!-- .col -->
        </div>
</div>

@include('includes.footer')
@endsection