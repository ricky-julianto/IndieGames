@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/hollow-home.css') }}">
<section class="hm-home">
    <div class="hm-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 hm-hero-content">
                    <p class="hm-eyebrow">INDEPENDENT STREETWEAR</p>
                    <h1 class="hm-hero-title">
                        HOLLOW.<br>MARCH<span class="hm-registered"></span>
                    </h1>
                    <p class="hm-hero-description">
                        Kenakan identitasmu. Tunjukkan gayamu.
                         Streetwear yang tampil beda dari yang lain..</p>    
                </div>
                <div class="col-lg-4 hm-hero-image-wrapper">
                    <img src="{{ asset('images/poto home.jpg') }}"
                        alt="Hollow.March" class="hm-hero-image">
                </div>
            </div>
        </div>
    </div>
    <section class="hm-collection py-5" id="koleksi">
        <div class="container text-center">
            @php
                $koleksi = [
                    ['Kaos Hitam', 'project2.jpg','Kaos Basic Hitam' ],
                    ['Kaos Putih', 'project5.jpg','Kaos Basic Putih' ],
                    ['Work Jacket', 'project8.jpg','Jacket Modern' ],
                ];
            @endphp
            <div class="row g-4">
                @foreach ($koleksi as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="hm-product-card">
                            <div class="hm-product-image">
                                <img src="{{ asset('images/' . $item[1]) }}"
                                    alt="{{ $item[0] }}">
                            </div>
                            <div class="hm-product-info">
                                <h3 class="hm-product-title">{{ $item[0] }}</h3>
                                <p class="hm-product-description">{{ $item[2] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="hm-closing py-5">
        <div class="container text-center">
            <h2 class="hm-closing-title">Temukan Gaya Khasmu</h2>
            <p class="hm-closing-description"> Ekspresikan jati dirimu bersama Hollow.March.</p>                       
            <a href="project" class="btn btn-light btn-lg mt-3 px-4">Lihat Produk</a> 
            <a href="profile" class="btn btn-light btn-lg mt-3 px-4">Tentang Kami</a>          
        </div>
    </section>
</section>
@endsection
