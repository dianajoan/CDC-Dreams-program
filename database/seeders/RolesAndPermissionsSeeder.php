<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create the admin role if it doesn't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Define permissions
        $permissions = [
            'access articles menu',
            'edit own posts',
            'delete own posts',
        ];

        // Create permissions if they don't exist and assign to admin role
        foreach ($permissions as $permission) {
            $permissionInstance = Permission::firstOrCreate(['name' => $permission]);
            $adminRole->givePermissionTo($permissionInstance);
        }
    }
}
