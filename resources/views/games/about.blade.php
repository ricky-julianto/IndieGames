@extends('games.layout')

@section('title', 'Tentang IndieGames')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<section class="about-hero">
    <div class="about-heading">
        <span class="about-label">DISCOVER THE INDIE WORLD</span>
        <h1>More Than Games.<br>
            <span>It's an Experience.</span>
        </h1>
        <p>
            Mengenal dunia game indie yang penuh kreativitas,
            cerita unik, dan pengalaman bermain yang berbeda.
        </p>
    </div>

    <div class="about-hero-image">
        <img src="{{ asset('images/hollow knight.jpg') }}"
             alt="Hollow Knight">
    </div>
</section>

<section class="indie-section">
    <div class="section-heading">
        <span class="about-label">01 — ABOUT INDIE GAMES</span>
        <h2>A Different Kind<br>of Gaming World.</h2>
    </div>

    <div class="indie-description">
        <p>
            Game indie adalah permainan yang dikembangkan oleh individu
            atau tim independen, biasanya dengan kebebasan lebih besar
            dalam menentukan konsep, desain, dan jalan cerita.
        </p>

        <p>
            Berbeda dari game produksi besar, game indie sering hadir
            dengan ide yang berani, visual yang khas, mekanisme permainan
            kreatif, serta cerita yang mampu memberikan pengalaman
            berbeda bagi setiap pemain.
        </p>
    </div>

    <div class="indie-highlight">
        <div>
            <span>CREATIVITY</span>
            <h3>Ide yang Bebas</h3>
            <p>Setiap pengembang punya cara tersendiri untuk menciptakan dunia permainan.</p>
        </div>

        <div>
            <span>IDENTITY</span>
            <h3>Gaya yang Unik</h3>
            <p>Visual, musik, dan cerita menjadi ciri khas setiap game indie.</p>
        </div>

        <div>
            <span>EXPERIENCE</span>
            <h3>Pengalaman Berbeda</h3>
            <p>Beragam genre dan konsep memberikan pilihan bermain yang lebih luas.</p>
        </div>
    </div>
</section>


<section class="company-section">
    <div class="company-title">
        <h2>Kenalan dengan<br><span>IndieGames.</span></h2>
    </div>

    <div class="company-content">
        <p>
            IndieGames adalah website katalog yang dibuat untuk
            memperkenalkan berbagai game indie kepada para penggemar
            permainan digital. Website ini menjadi tempat untuk melihat
            informasi game dalam satu halaman yang mudah dijelajahi.
        </p>

        <p>
            Pengunjung dapat menemukan informasi seperti nama game,
            pengembang, genre, platform, harga, dan deskripsi game.
            Dengan informasi tersebut, pengunjung bisa mengenal sebuah
            game sebelum memutuskan untuk memainkannya.
        </p>

        <p>
            Kami ingin menjadikan IndieGames sebagai katalog yang
            sederhana, informatif, dan nyaman digunakan untuk menemukan
            berbagai game indie dari beragam genre.
        </p>

    </div>
</section>
@endsection
