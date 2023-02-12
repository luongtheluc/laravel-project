<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            ['name' => 'super-admin', 'displayname' => 'Super Admin', 'group' => 'system'],
            ['name' => 'admin', 'displayname' => 'Admin', 'group' => 'system'],
            ['name' => 'manager', 'displayname' => 'Manager', 'group' => 'system'],
            ['name' => 'employee', 'displayname' => 'employee', 'group' => 'system'],
            ['name' => 'user', 'displayname' => 'User', 'group' => 'system'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate($role);
        }

        $permissions = [
            ['name' => 'create-user', 'displayname' => 'Create user', 'group' => 'User'],
            ['name' => 'update-user', 'displayname' => 'update user', 'group' => 'User'],
            ['name' => 'show-user', 'displayname' => 'show user', 'group' => 'User'],
            ['name' => 'delete-user', 'displayname' => 'delete user', 'group' => 'User'],

            ['name' => 'create-role', 'displayname' => 'Create Role', 'group' => 'Role'],
            ['name' => 'update-role', 'displayname' => 'update Role', 'group' => 'Role'],
            ['name' => 'show-role', 'displayname' => 'show Role', 'group' => 'Role'],
            ['name' => 'delete-role', 'displayname' => 'delete Role', 'group' => 'Role'],

            ['name' => 'create-category', 'displayname' => 'Create Category', 'group' => 'Category'],
            ['name' => 'update-category', 'displayname' => 'update Category', 'group' => 'Category'],
            ['name' => 'show-category', 'displayname' => 'show Category', 'group' => 'Category'],
            ['name' => 'delete-category', 'displayname' => 'delete Category', 'group' => 'Category'],

            ['name' => 'create-product', 'displayname' => 'Create Product', 'group' => 'Product'],
            ['name' => 'update-product', 'displayname' => 'update Product', 'group' => 'Product'],
            ['name' => 'show-product', 'displayname' => 'show Product', 'group' => 'Product'],
            ['name' => 'delete-product', 'displayname' => 'delete Product', 'group' => 'Product'],

            ['name' => 'create-coupon', 'displayname' => 'Create Coupon', 'group' => 'Coupon'],
            ['name' => 'update-coupon', 'displayname' => 'update Coupon', 'group' => 'Coupon'],
            ['name' => 'show-coupon', 'displayname' => 'show Coupon', 'group' => 'Coupon'],
            ['name' => 'delete-coupon', 'displayname' => 'delete Coupon', 'group' => 'Coupon'],



        ];

        foreach ($permissions as $item) {
            Permission::updateOrCreate($item);
        }
    }
}
