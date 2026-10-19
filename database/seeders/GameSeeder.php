<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::query()->delete();

        $games = [
            [
                'title' => 'Stardew Valley',
                'developer' => 'ConcernedApe',
                'genre' => 'Simulation RPG',
                'platform' => 'PC',
                'price' => 115000,
                'image' => 'stardew valley.jpg',
                'description' => 'Game simulasi bertani dan membangun kehidupan di desa.',
            ],
            [
                'title' => 'Hollow Knight',
                'developer' => 'Team Cherry',
                'genre' => 'Metroidvania',
                'platform' => 'PC',
                'price' => 90000,
                'image' => 'hollow knight.jpg',
                'description' => 'Jelajahi kerajaan bawah tanah dan lawan berbagai musuh.',
            ],
            [
                'title' => 'Celeste',
                'developer' => 'Maddy Makes Games',
                'genre' => 'Platformer',
                'platform' => 'PC',
                'price' => 75000,
                'image' => 'celeste.jpg',
                'description' => 'Petualangan mendaki gunung dengan tantangan platforming.',
            ],
            [
                'title' => 'Undertale',
                'developer' => 'Toby Fox',
                'genre' => 'RPG',
                'platform' => 'PC',
                'price' => 60000,
                'image' => 'undertable.jpg',
                'description' => 'RPG unik dengan pilihan dialog dan pertarungan berbeda.',
            ],
            [
                'title' => 'Terraria',
                'developer' => 'Re-Logic',
                'genre' => 'Sandbox',
                'platform' => 'PC',
                'price' => 70000,
                'image' => 'terraria.jpg',
                'description' => 'Gali, bangun, dan jelajahi dunia dua dimensi.',
            ],
            [
                'title' => 'Dead Cells',
                'developer' => 'Motion Twin',
                'genre' => 'Roguelike',
                'platform' => 'PC',
                'price' => 120000,
                'image' => 'dead cells.jpg',
                'description' => 'Lawan musuh dalam petualangan aksi yang menantang.',
            ],
            [
                'title' => 'Cuphead',
                'developer' => 'Studio MDHR',
                'genre' => 'Run and Gun',
                'platform' => 'PC',
                'price' => 150000,
                'image' => 'cuphead.jpg',
                'description' => 'Game aksi dengan visual animasi bergaya kartun klasik.',
            ],
            [
                'title' => 'Among Us',
                'developer' => 'Innersloth',
                'genre' => 'Social Deduction',
                'platform' => 'PC',
                'price' => 45000,
                'image' => 'among us.jpg',
                'description' => 'Cari impostor dan selesaikan tugas bersama pemain lain.',
            ],
            [
                'title' => 'Limbo',
                'developer' => 'Playdead',
                'genre' => 'Puzzle Platformer',
                'platform' => 'PC',
                'price' => 50000,
                'image' => 'limbo.jpg',
                'description' => 'Petualangan puzzle dengan dunia gelap dan misterius.',
            ],
            [
                'title' => 'INSIDE',
                'developer' => 'Playdead',
                'genre' => 'Puzzle Adventure',
                'platform' => 'PC',
                'price' => 80000,
                'image' => 'inside.jpg',
                'description' => 'Jelajahi dunia misterius melalui teka-teki dan platforming.',
            ],
            [
                'title' => 'Papers, Please',
                'developer' => 'Lucas Pope',
                'genre' => 'Simulation',
                'platform' => 'PC',
                'price' => 65000,
                'image' => 'paper, please.jpg',
                'description' => 'Periksa dokumen pendatang di perbatasan negara fiktif.',
            ],
            [
                'title' => 'A Short Hike',
                'developer' => 'Adam Robinson-Yu',
                'genre' => 'Adventure',
                'platform' => 'PC',
                'price' => 55000,
                'image' => 'a short hike.jpg',
                'description' => 'Jelajahi pulau yang tenang dan mendaki menuju puncak.',
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
