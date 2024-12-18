<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        departemen::create([
            //bph inti
            'id' => 1,
            'nama' => 'BPH Inti',
            'deskripsi' => 'Badan Pengurus Harian Inti yang bertanggung jawab atas koordinasi keseluruhan kegiatan dan program kerja BEM IT Del.',
            'ketua' => 'Rony Bakara',
            'wakilketua' => 'Samuel Siagian',
            'logo' => '1733101420.png',
        ]);

        departemen::create([
            //diptek
            'id' => 2,
            'nama' => 'DIPTEK',
            'deskripsi' => 'Departemen Ilmu Pengetahuan dan Teknologi (DIPTEK) merupakan departemen yang bergerak dalam ilmu pengetahuan dan teknologi. Departemen ini juga mengelola dan memberikan informasi mengenai ilmu pengetahuan dan teknologi kepada mahasiswa, serta membantu meningkatkan minat dan bakat mahasiswa di bidang akademik.',
            'ketua' => 'Josep Napitupulu',
            'wakilketua' => 'Youni Lumban Tobing',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //depagsos
            'id' => 3,
            'nama' => 'DEPAGSOS',
            'deskripsi' => 'Departemen Agama dan Sosial merupakan departemen yang berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.',
            'ketua' => 'Markus Hutagalung',
            'wakilketua' => 'Richard Aritonang',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //depkebdis
            'id' => 4,
            'nama' => 'DEPKEBDIS',
            'deskripsi' => 'Departemen Ketertiban dan Kedisiplinan merupakan departemen yang mengemban tugas menegakkan dan meningkatkan ketertiban dan kedisiplinan seluruh mahasiswa.',
            'ketua' => 'Pany Matondang',
            'wakilketua' => null,
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //depkominfo
            'id' => 5,
            'nama' => 'DEPKOMINFO',
            'deskripsi' => 'Departemen Komunikasi dan Informasi (DEPKOMINFO) berperan dalam menanggungjawabi kepentingan komunikasi dan informasi, jembatan antar departemen, dan memanfaatkan media komunikatif sebagai pusat informasi keorganisasian.',
            'ketua' => 'Archico Sembiring',
            'wakilketua' => 'Albertus',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //depol
            'id' => 6,
            'nama' => 'DEPOL',
            'deskripsi' => 'Departemen Olahraga IT Del berdedikasi untuk membina dan mengembangkan minat serta bakat olahraga mahasiswa, serta meningkatkan kualitas olahraga di lingkungan kampus.',
            'ketua' => 'Albert Panggabean',
            'wakilketua' => 'Salwa Harahap',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //depsenbud
            'id' => 7,
            'nama' => 'DEPSENBUD',
            'deskripsi' => 'Departemen Seni dan Budaya (DEPSENBUD) adalah penyedia wadah untuk mahasiswa/i IT Del untuk mengembangkan kemampuan dalam bidang seni juga berperan dalam hal menjaga kebudayaan yang dianut di kampus. Departemen ini akan selalu mengambil tema acara yang memiliki sangkut paut dengan kesenian & kebudayaan.',
            'ketua' => 'Theo Manullang',
            'wakilketua' => 'Salomo Sinambela',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //dhpm
            'id' => 8,
            'nama' => 'DHPM',
            'deskripsi' => 'Departemen Kemahasiswaan merupakan departemen yang bertanggung jawab dalam mengelola dan mengembangkan potensi mahasiswa, serta memberikan pelayanan terbaik bagi mahasiswa.',
            'ketua' => 'Sitogab Girsang',
            'wakilketua' => 'Gabriel Sigalingging',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //dpdk
            'id' => 9,
            'nama' => 'DPDK',
            'deskripsi' => 'Departemen Pusat Dalam Kampus (DPDK) berperan dalam mengurus aktivitas serta melakukan konsolidasi internal pada UKM dan HIMAPRO.',
            'ketua' => 'Mariana Hasibuan',
            'wakilketua' => 'Jaden Panggabean',
            'logo' => '1733384936.png',
        ]);

        departemen::create([
            //sarpras
            'nama' => 'SARPRAS',
            'deskripsi' => 'Departemen Sarana dan Prasarana (SARPRAS) bertanggung jawab dalam penyedia alat dan keperluan yang mungkin dibutuhkan dalam kegiatan departemen-departemen lain.',
            'ketua' => 'Ondo Siagian',
            'wakilketua' => null,
            'logo' => '1733384936.png',
        ]);
    }
}
