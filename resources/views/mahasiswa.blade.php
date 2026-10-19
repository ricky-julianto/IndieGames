@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="hollow-profile">

    <section class="hollow-hero text-center">
        <div class="container">

            <img src="{{ asset('images/logo hollow.png') }}"
                 alt="Logo HOLLOW"
                 class="hollow-logo">
            <h2>Ekspresikan Diri Kalian dengan HOLLOW.MARCH.</h2>
        </div>
    </section>

<section class="hollow-about" id="tentang">
    <div class="container">
        <h2><strong>TENTANG HOLLOW.MARCH</strong></h2>

        <p>HOLLOW.MARCH merupakan brand clothing yang berfokus
        pada fashion modern dengan desain minimalis, karakter
        kuat, dan gaya yang merepresentasikan identitas
        penggunanya.</p>
        
        <p>HOLLOW.MARCH hadir sebagai wadah untuk mengekspresikan
        diri melalui pakaian, dengan mengutamakan kreativitas,
        kualitas, dan kenyamanan dalam setiap produk.</p>
    
        <p>HOLLOW.MARCH didirikan pada tahun
        <strong>2026</strong> dengan tujuan menghadirkan
        produk fashion yang memiliki ciri khas dan karakter
        tersendiri.</p>

        <div class="company-section">
            <h2><strong>Perusahaan</strong></h2>
            <div class="company-list">
                <div class="company-item">
                    <strong>Nama Brand</strong>
                    <p>HOLLOW.MARCH</p>
                </div>
                <div class="company-item">
                    <strong>Bidang Usaha</strong>
                    <p>Fashion dan Clothing</p>
                </div>
                <div class="company-item">
                    <strong>Produk</strong>
                    <p>Pakaian dan Apparel</p>
                </div>
                <div class="company-item">
                    <strong>Tagline</strong>
                    <p>Express Your Identity.</p>
                </div>
            </div>
        </div>

    </div>
</section>    
</div>
@endsection