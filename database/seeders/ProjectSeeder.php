<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi Berbasi Web untuk pengelolaan data mahahaswa, jadwal kulia dan nilai perkuiahan',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'Selesai',
            ],
                        [
                'title' => 'E-Commers SEO Optimization',
                'description' => 'Aplikasi Optimalisasi struktur heading dan indexing halamn web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
                        [
                'title' => 'Reading Cover & Branding',
                'description' => 'Perancangan element grafis personal branding dan desain sampul buku Rekayasa Web',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
                        [
                'title' => 'Toko Hollow March',
                'description' => 'Aplikasi Penjualan Baju',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project4.jpg',
                'status' => 'Selesai',
            ],
            
            
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
