<?php

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = array(
            array('name' => 'user.create', 'guard_name' => 'Buat User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'user.view', 'guard_name' => 'Lihat User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'user.update', 'guard_name' => 'Edit User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'user.delete', 'guard_name' => 'Hapus User', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        );

        Permission::insert($permissions);
    }
}
