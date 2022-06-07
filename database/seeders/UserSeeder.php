<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
        {
        // on a rajouté tout le User::created([]) et on a importé User et Hash
        
        User::created([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            // attention évitez de mettre le mot de passe en clair ici 
            'password' =>  Hash::make('toor'),
            'role'  => 'ADMIN'
        ]);

    }
}
