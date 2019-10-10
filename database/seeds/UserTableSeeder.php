<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@basecamp.app',
            'password' => bcrypt('12345678'),
            'telp' => '08990125448',
            'date_of_birth' => '2001-05-19',
            'date_of_birth' => '2001-05-19',
            'gender' => 'L',
            'address' => 'Jl. Gondang Timur Dalam I No. 02',
        ]);

        $admin->assignRole('admin');
    }
}
