<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'manage enrollments']);
        Permission::create(['name' => 'manage events']);
        Permission::create(['name' => 'track progress']);
        Permission::create(['name' => 'manage materials']);
        Permission::create(['name' => 'provide training']);
        Permission::create(['name' => 'generate reports']);

        // Create roles and assign permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'content_creator']);
        $role->givePermissionTo(['manage enrollments', 'manage events', 'track progress', 'manage materials', 'provide training', 'generate reports']);
    }
}
