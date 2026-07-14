<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RbacSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'view-admin',
            'manage-users',
            'manage-roles',
            'manage-permissions',
            'view-audit-logs',
            'impersonate-users',
            'view-support',
            'manage-blogs',
            'manage-smtp',
            'manage-contact-forms',
            'manage-leads',
            'manage-case-studies',
            'manage-consultations',
            'manage-portfolio',
            'manage-business-results',
        ];

        foreach ($permissions as $name) {
            Permission::findOrCreate($name);
        }

        $superAdmin = Role::findOrCreate('super-admin');
        $admin = Role::findOrCreate('admin');
        $support = Role::findOrCreate('support');
        $user = Role::findOrCreate('user');

        // Super admin gets everything
        $superAdmin->syncPermissions(Permission::all());

        // Admin: standard management (no impersonation by default)
        $admin->syncPermissions([
            'view-admin',
            'manage-users',
            'manage-roles',
            'manage-permissions',
            'view-audit-logs',
            'view-support',
            'manage-blogs',
            'manage-smtp',
            'manage-contact-forms',
            'manage-leads',
            'manage-case-studies',
            'manage-consultations',
            'manage-portfolio',
            'manage-business-results',
        ]);

        // Support: website content + enquiries + blog management
        $support->syncPermissions([
            'view-support',
            'manage-blogs',
            'manage-smtp',
            'manage-contact-forms',
            'manage-leads',
            'manage-case-studies',
            'manage-consultations',
            'manage-portfolio',
            'manage-business-results',
        ]);

        $user->syncPermissions([]);
    }
}
