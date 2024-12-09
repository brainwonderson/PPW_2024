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
            'nama' => 'Samuel Janring Sitio',
            'departemen' => 'BPH INTI',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Riovan Sihombing',
            'departemen' => 'BPH INTI',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DIPTEK
        keanggotaan::create([
            'nama' => 'Alice Johnson',
            'departemen' => 'DIPTEK',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Bob Williams',
            'departemen' => 'DIPTEK',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPOL
        keanggotaan::create([
            'nama' => 'Charlie Brown',
            'departemen' => 'DEPOL',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'David Lee',
            'departemen' => 'DEPOL',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPAGSOS
        keanggotaan::create([
            'nama' => 'Emily Carter',
            'departemen' => 'DEPAGSOS',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Frank Miller',
            'departemen' => 'DEPAGSOS',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPSENBUD
        keanggotaan::create([
            'nama' => 'Grace Wilson',
            'departemen' => 'DEPSENBUD',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Henry Taylor',
            'departemen' => 'DEPSENBUD',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DHPM
        keanggotaan::create([
            'nama' => 'Isabella Anderson',
            'departemen' => 'DHPM',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Jack Thomas',
            'departemen' => 'DHPM',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DPDK
        keanggotaan::create([
            'nama' => 'Liam Jackson',
            'departemen' => 'DPDK',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Mia White',
            'departemen' => 'DPDK',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // DEPKEBDIS
        keanggotaan::create([
            'nama' => 'Noah Harris',
            'departemen' => 'DEPKEBDIS',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);

        keanggotaan::create([
            'nama' => 'Olivia Martin',
            'departemen' => 'DEPKEBDIS',
            'jabatan' => 'Wakil Ketua',
            'foto' => '1733384936.png',
        ]);

        // SARPRAS
        keanggotaan::create([
            'nama' => 'Parker Lee',
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