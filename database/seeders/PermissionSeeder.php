<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name' => 'admin']);

        // User Management
        Permission::firstOrCreate(['name' => 'view users','group'=>'user','permission'=>'view users', 'description' => 'view all system users'])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'create users','group'=>'user','permission'=>'create users', 'description' => 'create system users'])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'delete users','group'=>'user','permission'=>'delete users', 'description' => 'delete system users'])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'edit users','group'=>'user','permission'=>'edit users', 'description' => 'edit all users'])->syncRoles([$admin]);

        // Companies Management
        Permission::firstOrCreate(['name' => 'create company','group'=>'company','permission'=>'create company', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'delete company','group'=>'company','permission'=>'delete company', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'edit company','group'=>'company','permission'=>'edit company', 'description' => ''])->syncRoles([$admin]);

        // Integration Management
        Permission::firstOrCreate(['name' => 'create integration','group'=>'integration','permission'=>'create integration', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'delete integration','group'=>'integration','permission'=>'delete integration', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'edit integration','group'=>'integration','permission'=>'edit integration', 'description' => ''])->syncRoles([$admin]);

        // Subscription Management
        Permission::firstOrCreate(['name' => 'create subscription','group'=>'subscription','permission'=>'create subscription', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'delete subscription','group'=>'subscription','permission'=>'delete subscription', 'description' => ''])->syncRoles([$admin]);
        Permission::firstOrCreate(['name' => 'edit subscription','group'=>'subscription','permission'=>'edit subscription', 'description' => ''])->syncRoles([$admin]);

    }
}
