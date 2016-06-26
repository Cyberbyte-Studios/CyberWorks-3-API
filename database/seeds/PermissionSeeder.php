<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'user', 'displayName' => 'User', 'descriptionShort' => 'Basic User Role.']);
        Role::create(['name' => 'admin', 'displayName' => 'Admin', 'descriptionShort' => 'Basic Admin Role.']);

        /* module permissions */
        Permission::create(['name' => 'enable-module', 'displayName' => 'Enable Module', 'descriptionShort' => 'Allows the user to enable modules']);
        Permission::create(['name' => 'disable-module', 'displayName' => 'Disable Module', 'descriptionShort' => 'Allows the user to disable modules']);
        Permission::create(['name' => 'all-modules', 'displayName' => 'List All Modules', 'descriptionShort' => 'Allows the user to list all modules']);
        Permission::create(['name' => 'enabled-modules', 'displayName' => 'List All Enabled Modules', 'descriptionShort' => 'Allows the user to list all enabled modules']);
        Permission::create(['name' => 'disabled-modules', 'displayName' => 'List All Disabled Modules', 'descriptionShort' => 'Allows the user to list all disabled modules']);
        Permission::create(['name' => 'enabled', 'displayName' => 'Check if a module is enabled', 'descriptionShort' => 'Allows the user to check if a module is enabled']);
        Permission::create(['name' => 'disabled', 'displayName' => 'Check if a module is disabled', 'descriptionShort' => 'Allows the user to check if a module is disabled']);
        
        /* permission permissions */
        Permission::create(['name' => 'manage-permissions', 'displayName' => 'Manage Permissions', 'descriptionShort' => 'Allows the user to manage permissions']);
        Permission::create(['name' => 'create-permissions', 'displayName' => 'Create Permissions', 'descriptionShort' => 'Allows the user to create permissions']);
        Permission::create(['name' => 'delete-permissions', 'displayName' => 'Delete Permissions', 'descriptionShort' => 'Allows the user to delete permissions']);
        
        Permission::create(['name' => 'edit-permissions', 'displayName' => 'Edit Permissions', 'descriptionShort' => 'Allows the user to edit another users permissions']);
        
    }
}