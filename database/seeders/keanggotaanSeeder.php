<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\keanggotaan;

class keanggotaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BPH INTI
        keanggotaan::create([
            'nama' => 'Rony Bakara',
            'departemen' => 'BPH INTI',
            'jabatan' => 'Ketua',
            'foto' => '1733710820.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Samuel Siagian',
            'departemen' => 'BPH INTI',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733710833.png',
        ]);

        // DIPTEK
        keanggotaan::create([
            'nama' => 'Josep Napitupulu',
            'departemen' => 'DIPTEK',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Youni Lumban Tobing',
            'departemen' => 'DIPTEK',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPOL
        keanggotaan::create([
            'nama' => 'Albert Panggabean',
            'departemen' => 'DEPOL',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Salwa Harahap',
            'departemen' => 'DEPOL',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPAGSOS
        keanggotaan::create([
            'nama' => 'Markus Hutagalung',
            'departemen' => 'DEPAGSOS',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Richard Aritonang',
            'departemen' => 'DEPAGSOS',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPSENBUD
        keanggotaan::create([
            'nama' => 'Theo Manullang',
            'departemen' => 'DEPSENBUD',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Salomo Sinambela',
            'departemen' => 'DEPSENBUD',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DHPM
        keanggotaan::create([
            'nama' => 'Sitogab Girsang',
            'departemen' => 'DHPM',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Gabriel Sigalingging',
            'departemen' => 'DHPM',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DPDK
        keanggotaan::create([
            'nama' => 'Mariana Hasibuan',
            'departemen' => 'DPDK',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Jaden Panggabean',
            'departemen' => 'DPDK',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPKEBDIS
        keanggotaan::create([
            'nama' => 'Pany Matondang',
            'departemen' => 'DEPKEBDIS',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        // SARPRAS
        keanggotaan::create([
            'nama' => 'Ondo Siagian',
            'departemen' => 'SARPRAS',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Quinn Young',
            'departemen' => 'SARPRAS',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);
    }
}