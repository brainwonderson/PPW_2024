<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ukm;

class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // BASKET
        UKMSeeder::create([
            'nama' => 'Basket',
            'deskripsi' => 'UKM Basket di IT DEL adalah organisasi atau kelompok yang bergerak dalam bidang olahraga basket dan berfungsi sebagai wadah bagi mahasiswa untuk mengembangkan keterampilan, pengetahuan, dan kecintaan mereka terhadap olahraga tersebut. Meskipun tidak berfokus pada turnamen antar kampus, UKM ini tetap menyediakan sarana dan kesempatan bagi anggotanya untuk berlatih secara rutin, meningkatkan kemampuan teknis, serta memperkuat ikatan sosial di antara anggota. UKM Basket bertujuan untuk menciptakan lingkungan yang mendukung kesehatan fisik, kerja sama tim, dan semangat kebersamaan, serta menjadi tempat bagi mahasiswa untuk menikmati olahraga basket dalam suasana yang positif dan menyenangkan.',
            'programkerja' => '',
            'ketua' => 'JONATHAN SITORUS',
        ]);

        // GDSC
        UKMSeeder::create([
            'nama' => 'GDSC',
            'deskripsi' => 'UKM GDSC (Google Developer Student Clubs) adalah komunitas kemahasiswaan yang didukung oleh Google, bertujuan untuk mengembangkan keterampilan teknologi dan pemrograman mahasiswa melalui pembelajaran, proyek kolaboratif, dan pelatihan, guna memecahkan berbagai masalah menggunakan solusi teknologi.',
            'programkerja' => '',
            'ketua' => 'Gabriel',
        ]);

        // PGM
        UKMSeeder::create([
            'nama' => 'PGM',
            'deskripsi' => 'UKM Persatuan Gitar Mahasiswa (PGM) di kampus Institut Teknologi Del telah menjadi bagian penting dalam mendukung berbagai kegiatan dan acara kampus. Sebagai UKM yang berfokus pada seni musik, PGM sering dipercaya untuk mengisi acara dengan persembahan lagu atau musik yang menjadi bagian dari program acara. Namun, saat ini, anggota PGM menghadapi kendala dalam ketersediaan alat utama, yaitu gitar, karena peraturan kampus yang tidak memperbolehkan mahasiswa membawa gitar pribadi ke asrama.',
            'programkerja' => '',
            'ketua' => 'Bram Siregar',
        ]);

        // PSM
        UKMSeeder::create([
            'nama' => 'PSM',
            'deskripsi' => 'UKM PSM (Unit Kegiatan Mahasiswa Paduan Suara Mahasiswa) adalah organisasi kemahasiswaan yang bergerak di bidang seni musik vokal, khususnya paduan suara, yang bertujuan untuk mengembangkan bakat dan minat mahasiswa dalam bernyanyi serta meningkatkan keterampilan musikal melalui berbagai kegiatan dan penampilan.',
            'programkerja' => '',
            'ketua' => 'Joy Lamtardas Manurung',
        ]);

        // EnglishClub
        UKMSeeder::create([
            'nama' => 'EnglishClub',
            'deskripsi' => 'Del English Club (EC) adalah komunitas yang berfokus pada pengembangan kemampuan bahasa Inggris bagi mahasiswa-mahasiswi Institut Teknologi Del. Selain sebagai wadah untuk meningkatkan keterampilan berbahasa, DEC juga berperan penting dalam memperluas wawasan global dan mempersiapkan mahasiswa menghadapi tantangan dunia internasional.',
            'programkerja' => '',
            'ketua' => 'Tiarani Sibarani',
        ]);

        // 3dc
        UKMSeeder::create([
            'nama' => '3dc',
            'deskripsi' => '3DC merupakan singkatan dari Del Dance Drama Club. Secara baku, 3DC juga sering disebut PTM, yaitu Paduan Tari Mahasiswa. 3DC adalah salah satu UKM di bidang seni yang ada di Institut Teknologi Del. 3DC memiliki 3 divisi yaitu modern dance, tradisional dance, drama. PTM atau 3DC sering berpartisipasi dalam berbagai kegiatan didalam kampus seperti IDG , IT Del fest bahkan kegiatan BEM mauoun luar kampus seperti perlombaan.',
            'programkerja' => '',
            'ketua' => 'Agnes Cicilia Marbun',
        ]);

    }
}
