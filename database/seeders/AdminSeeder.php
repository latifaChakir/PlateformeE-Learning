<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=new Role();
        $role->name='Admin';
        $role->save();

        User::create([
            'name' => 'Admin',
            'email' => 'chakirlatifa2001@gmail.com',
            'password' => bcrypt('chakirlatifa2001@gmail.com'), 
            'id_role' => '1', 
        ]);
    }
}
