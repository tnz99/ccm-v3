<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrNew(['email' => env('DEFAULT_ADMIN_EMAIL')]);
        $user->name = 'Super Admin';
        $user->password = Hash::make(env('DEFAULT_ADMIN_PASSWORD'));
        $user->role_id = Role::where('name', 'super_admin')->first()->value('id');
        $user->save();
    }
}
