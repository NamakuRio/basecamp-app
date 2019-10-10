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
            'name' => 'Administrator',
            'email' => 'basecamp@testing.id',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
    }
}
