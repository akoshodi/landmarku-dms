<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
//        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'user.view', 'user.create', 'user.edit', 'user.delete', 'user.deactivate', 'user.reactivate', 'user.impersonate', 'user.assign-role', 'user.change-password',
            'role.view', 'role.create', 'role.edit', 'role.delete', 'role.assign-permissions',
            'document.view', 'document.create', 'document.edit', 'document.delete', 'document.download', 'document.upload', 'document.share', 'document.move', 'document.copy', 'document.archive', 'document.unarchive', 'document.restore', 'document.search', 'document.comment',
            'tag.view', 'tag.create', 'tag.edit', 'tag.delete', 'tag.assign',
            'settings.view', 'settings.edit', 'settings.manage-integrations', 'settings.manage-notifications',
            'audit.view', 'audit.download', 'report.view', 'report.generate',
            'notification.view', 'notification.create', 'notification.edit', 'notification.delete',
            'api.access', 'api.manage-tokens'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
