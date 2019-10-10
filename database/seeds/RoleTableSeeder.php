<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'Admin'
        ]);

        $admin->givePermissionTo('user.create', 'user.view', 'user.update', 'user.delete');

        $mitra = Role::create([
            'name' => 'mitra',
            'guard_name' => 'Mitra'
        ]);

        $member = Role::create([
            'name' => 'member',
            'guard_name' => 'Member',
            'user_default' => 1
        ]);
    }
}
