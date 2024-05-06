<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = array('donar', 'admin', 'super_admin');
        
        foreach($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        } 
    }
}
