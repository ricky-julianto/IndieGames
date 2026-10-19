@extends('games.layout')

@section('title', 'Daftar Game | IndieGames')

@section('content')

<link rel="stylesheet" href="{{ asset('css/daftar-game.css') }}">

<div class="mb-5">
    
    <h1 class="fw-bold">Daftar Game</h1>
    <p class="text-secondary">
        Temukan game indie favoritmu di sini.
    </p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse ($games as $game)
        <div class="col">
            <div class="game-card h-100">
                <img
                    src="{{ asset('images/' . $game->image) }}"
                    alt="{{ $game->title }}"
                    class="catalog-image"
                >

                <div class="p-3">
                    <span class="badge text-bg-secondary mb-2">
                        {{ $game->genre }}
                    </span>

                    <h5 class="fw-bold">{{ $game->title }}</h5>

                    <p class="text-secondary small">
                        {{ $game->developer }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="text-success">
                            @if(is_numeric($game->price))
                                Rp {{ number_format($game->price, 0, ',', '.') }}
                            @else
                                {{ $game->price }}
                            @endif
                        </strong>

                        <a href="{{ route('games.show', $game->id) }}"
                           class="btn btn-dark btn-sm">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            Belum ada game tersedia.
        </div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $games->links('pagination::bootstrap-5') }}
</div>

@endsection
