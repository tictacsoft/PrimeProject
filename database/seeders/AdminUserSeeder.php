<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'phoneno' => '081234567890',
                'password' => Hash::make('password'),
            ]
        );

        
        $role = Role::firstOrCreate(
            ['name' => 'Admin', 'guard_name' => 'web']
        );

        
        $user->assignRole($role);
    }
}
