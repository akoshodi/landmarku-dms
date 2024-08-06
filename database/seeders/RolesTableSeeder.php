<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the table is empty before seeding
        if (Role::count() == 0) {
            // Create roles
            $superadmin = Role::create(['name' => 'Superadmin']);
            $admin = Role::create(['name' => 'Administrator']);
            $management = Role::create(['name' => 'Management']);
            $staff = Role::create(['name' => 'Staff']);
            $student = Role::create(['name' => 'Student']);
        }


        // Assign all permissions to Superadmin
        $superadmin->givePermissionTo(Permission::all());

        // Assign specific permissions to Administrator (example)
//        $admin->syncPermissions([
//            'admin.access.user',
//            'admin.access.user.list',
//            'admin.access.user.deactivate',
//            'admin.access.user.reactivate',
//            'admin.access.user.clear-session',
//            'admin.access.user.impersonate',
//        ]);

        // Assign specific permissions to other roles as needed
        // Example for management
//        $management->syncPermissions([
//            'admin.access.user',
//            'admin.access.user.list',
//        ]);
    }
}
