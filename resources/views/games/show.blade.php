
@extends('games.layout')

@section('title', $game->title . ' | IndieGames')

@section('content')

<link rel="stylesheet" href="{{ asset('css/detail-game.css') }}">

<div class="mb-4">
    <a href="{{ route('games.index') }}"
       class="btn btn-outline-dark btn-back">
        &larr; Kembali
    </a>
</div>

<div class="detail-card">
    <div class="row g-0">

        <div class="col-lg-6">
            <img
                src="{{ asset('images/' . $game->image) }}"
                alt="{{ $game->title }}"
                class="game-image"
            >
        </div>

        <div class="col-lg-6">
            <div class="game-info">

                <span class="badge text-bg-dark mb-3">
                    GAME INDIE
                </span>

                <h1 class="game-title">{{ $game->title }}</h1>

                <p class="text-secondary mb-4">
                    Dikembangkan oleh {{ $game->developer }}
                </p>

                <div class="mb-4">
                    <span class="info-badge">
                         {{ $game->platform }}
                    </span>

                    <span class="info-badge">
                         {{ $game->genre }}
                    </span>
                </div>

                <div class="mb-4">
                    <p class="text-secondary mb-1">Harga Game</p>

                    <div class="game-price">
                        @if(is_numeric($game->price))
                            Rp {{ number_format($game->price, 0, ',', '.') }}
                        @else
                            {{ $game->price }}
                        @endif
                    </div>
                </div>

                <hr>

            </div>
        </div>

    </div>
</div>

@endsection
