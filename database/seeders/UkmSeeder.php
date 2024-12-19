<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ukm;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // BASKET
        Ukm::create([
            'nama' => 'Basket',
            'deskripsi' => 'Berfungsi sebagai wadah bagi mahasiswa untuk mengembangkan keterampilan, pengetahuan, dan kecintaan mereka terhadap olahraga basket',
            'programkerja' => '',
            'ketua' => 'JONATHAN SITORUS',
        ]);

        // GDSC
        Ukm::create([
            'nama' => 'GDSC',
            'deskripsi' => 'GDSC (Google Developer Student Clubs) adalah komunitas kemahasiswaan yang didukung oleh Google, bertujuan untuk mengembangkan keterampilan teknologi dan pemrograman mahasiswa.',
            'programkerja' => '',
            'ketua' => 'Gabriel',
        ]);

        // PGM
        Ukm::create([
            'nama' => 'PGM',
            'deskripsi' => 'PGM (Persatuan Gitar Mahasiswa) sering dipercaya untuk mengisi acara dengan persembahan lagu atau musik yang menjadi bagian dari program acara di IT Del.',
            'programkerja' => '',
            'ketua' => 'Bram Siregar',
        ]);

        // PSM
        Ukm::create([
            'nama' => 'PSM',
            'deskripsi' => 'PSM (Unit Kegiatan Mahasiswa Paduan Suara Mahasiswa) adalah organisasi kemahasiswaan yang bergerak di bidang seni musik vokal, khususnya paduan suara.',
            'programkerja' => '',
            'ketua' => 'Joy Lamtardas Manurung',
        ]);

        // EnglishClub
        Ukm::create([
            'nama' => 'English Club',
            'deskripsi' => 'EC (English Club) adalah komunitas yang berfokus pada pengembangan kemampuan bahasa Inggris bagi mahasiswa-mahasiswi Institut Teknologi Del. ',
            'programkerja' => '',
            'ketua' => 'Tiarani Sibarani',
        ]);

        // 3dc
        Ukm::create([
            'nama' => '3dc',
            'deskripsi' => '3DC (Del Dance Drama Club)atau PTM (Paduan Tari Mahasiswa) adalah salah satu Ukm di bidang seni dengan 3 divisi yaitu modern dance, tradisional dance, drama.',
            'programkerja' => '',
            'ketua' => 'Agnes Cicilia Marbun',
        ]);

    }
}
