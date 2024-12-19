<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
]);
   
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
]);
        DB::table('keanggotaan')::create([
            'nama' => 'Jane Smith',
            'departemen' => 'BPH INTI',
            'jabatan' => 'Ketua',
            'foto' => '1733384936.png', 
        ]);


        // User::factory()->create([
        //     'name' => 'Mohamed Said',
        //     'email' => 'mohamed@laravel.com',
        //     'password' => Hash::make('secret'),
        // ]);
        
        // User::factory()->create([
        //     'name' => 'James Brooks',
        //     'email' => 'james@laravel.com',
        //     'password' => Hash::make('passcode'),
        // ]);


    }

}
