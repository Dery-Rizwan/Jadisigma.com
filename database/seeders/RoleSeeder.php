<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);    // ID akan menjadi 1
        Role::create(['name' => 'user']);     // ID akan menjadi 2
        Role::create(['name' => 'trainer']);  // ID akan menjadi 3
    }
}
