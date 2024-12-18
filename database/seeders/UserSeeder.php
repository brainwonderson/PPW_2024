<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    // public function run()
    // {
    //     user::create([
    //         'name' => 'user',
    //         'email' => 'user@gmail.com',
    //         'password' => 'user',
    //         'role' => 'user',
    //     ]);

    //     user::create([
    //         'name' => 'admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => 'admin',
    //         'role' => 'admin',
    //     ]);

    // }
    public function run()
    {
        user::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'role' => 'user',
        ]);

        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'role' => 'admin',
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $randomPassword = Str::random(12); // Generate random password
            $name = 'user' . str_pad($i, 2, '0', STR_PAD_LEFT);
            
            // Save to database
            User::create([
                'name' => $name,
                'email' => "{$name}@gmail.com",
                'password' => Hash::make($randomPassword),
            ]);

            // Save original password to file
            file_put_contents(storage_path('user_passwords.txt'), "{$name}: {$randomPassword}\n", FILE_APPEND);

            // Optionally print to console
            echo "User: {$name}, Password: {$randomPassword}\n";
        }
    }
}
