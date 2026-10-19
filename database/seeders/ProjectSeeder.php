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
        
       
$projects = [
    [
        'title' => 'HOLLOW.MARCH DESIGN',
        'description' => 'Pengembangan aplikasi web untuk pengelolaan data mahasiswa menggunakan Laravel dan Bootstrap.',
        'teknologi' => 'Laravel & Bootstrap',
        'image' => 'project1.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH SEO ',
        'description' => 'Optimasi struktur heading dan indexing untuk meningkatkan keterbacaan website di mesin pencari.',
        'teknologi' => 'PHP & Google Search Console',
        'image' => 'project2.jpg',
        'status' => 'In Progress',
    ],
    [
        'title' => 'HOLLOW.MARCH Visual Branding',
        'description' => 'Perancangan identitas visual, elemen grafis, dan konsep desain untuk membangun karakter brand.',
        'teknologi' => 'Figma & Canva',
        'image' => 'project3.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Streetwear',
        'description' => 'Eksplorasi desain kaos streetwear dengan karakter grafis yang berani dan identitas khas HOLLOW.MARCH.',
        'teknologi' => 'Fashion Design & Graphic Design',
        'image' => 'project4.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Graphic Tee',
        'description' => 'Pengembangan desain grafis kaos dengan tipografi ekspresif dan gaya visual streetwear.',
        'teknologi' => 'Typography & Graphic Design',
        'image' => 'project5.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Logo Collection',
        'description' => 'Eksperimen penerapan logo dan elemen identitas brand pada berbagai konsep desain apparel.',
        'teknologi' => 'Logo Design & Branding',
        'image' => 'project6.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Apparel Design',
        'description' => 'Perancangan visual apparel yang menggabungkan gaya minimalis, streetwear, dan karakter khas brand.',
        'teknologi' => 'Apparel Design',
        'image' => 'project7.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Online Store',
        'description' => 'Pengembangan konsep toko online untuk menampilkan koleksi produk dan informasi brand secara digital.',
        'teknologi' => 'Laravel & Bootstrap',
        'image' => 'project8.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Product',
        'description' => 'Penyajian koleksi kaos melalui visual produk yang menonjolkan detail desain dan karakter streetwear.',
        'teknologi' => 'Product Photography & Design',
        'image' => 'project9.jpg',
        'status' => 'Selesai',
    ],
    [
        'title' => 'HOLLOW.MARCH Brand Campaign',
        'description' => 'Konsep promosi visual untuk memperkenalkan karakter, desain, dan koleksi HOLLOW.MARCH kepada audiens.',
        'teknologi' => 'Creative Design & Branding',
        'image' => 'project10.jpg',
        'status' => 'Selesai',
    ],
];


        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
