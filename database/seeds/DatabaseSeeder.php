<?php

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
    public function run()
    {
        // $this->call(UserSeeder::class);

        // user admin
        DB::table('users')->insert([
            'name' => 'Rayhan Admin',
            'email' => 'rayhan@admin.com',
            'password' => Hash::make(123456),
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Fahri Admin',
            'email' => 'fahri@admin.com',
            'password' => Hash::make(123456),
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Canda Admin',
            'email' => 'canda@admin.com',
            'password' => Hash::make(123456),
            'level' => 'admin',
        ]);

        // user sender
        DB::table('users')->insert([
            'name' => 'Rayhan',
            'email' => 'rayhan@email.com',
            'password' => Hash::make(123456),
            'level' => 'guest',
        ]);

        DB::table('users')->insert([
            'name' => 'Fahri',
            'email' => 'fahri@email.com',
            'password' => Hash::make(123456),
            'level' => 'guest',
        ]);

        DB::table('users')->insert([
            'name' => 'Canda',
            'email' => 'canda@email.com',
            'password' => Hash::make(123456),
            'level' => 'sender',
        ]);

        DB::table('kelola_kategoris')->insert([
            'kategori' => 'Seminar',
        ]);

        DB::table('kelola_madings')->insert([
            'users_id' => 3,
            'kelola_kategori_id' => 1,
            'deskripsi' => 'ini post sample',
            'status' => 1,
        ]);

        
        
    }
}
