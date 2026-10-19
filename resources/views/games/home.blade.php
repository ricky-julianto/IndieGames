
@extends('games.layout')

@section('title', 'Beranda | IndieGames')

@section('content')

<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

<section class="home-hero">
    <div class="hero-text">
        <span class="hero-label">✦ YOUR NEXT ADVENTURE STARTS HERE</span>

        <h1>
            PLAY DIFFERENT.<br>
            <span>PLAY INDIE.</span>
        </h1>

        <p>
            Bukan sekadar game. Temukan dunia baru, cerita yang
            berkesan, dan petualangan yang nggak biasa.
        </p>


<div class="hero-buttons">
    <a href="{{ route('games.index') }}" class="btn-explore">
        Jelajahi Game 
    </a>

    <a href="#tentang-home" class="btn-about">
        Kenali IndieGames
    </a>
</div>
        <div class="hero-note">
            <span class="online-dot"></span>
            YOUR HOME FOR INDIE GAMES
        </div>
    </div>

    <div class="hero-visual">
        <div class="visual-glow"></div>

        <div class="poster poster-back">
            <img src="{{ asset('images/stardew valley.jpg') }}"
                 alt="Stardew Valley">
        </div>

        <div class="poster poster-front">
            <img src="{{ asset('images/hollow knight.jpg') }}"
                 alt="Hollow Knight">

    </div>
</section>


<section class="home-about" id="tentang-home">
    <div>
        <h2>Dunia kecil.<br><span>Petualangan besar.</span></h2>
    </div>

    <div class="about-description">
        <p>
            IndieGames adalah tempat untuk menjelajahi berbagai game indie
            dari beragam genre. Dari petualangan yang menegangkan sampai
            game santai yang bikin betah, selalu ada dunia baru untuk ditemukan.
        </p>

    </div>
</section>

<section class="home-cta">
    <span>READY PLAYER ONE?</span>
    <h2>Petualanganmu<br>dimulai sekarang.</h2>

</section>

@endsection
