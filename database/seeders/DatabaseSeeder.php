<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminUserSeeder::class,
        ]);
        // Permission::create(['name' => 'view roles']);
        // Permission::create(['name' => 'add roles']);
        // Permission::create(['name' => 'edit roles']);
        // Permission::create(['name' => 'delete roles']);

        // $this->call([
        //     RoleSeeder::class,
        //     AdminUserSeeder::class,
        // ]);

    }


}
