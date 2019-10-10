<?php

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = array(
            array('name' => 'app.name', 'value' => 'Basecamp App', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'app.description', 'value' => 'Aplikasi Pecinta Pendaki Gunung', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'app.author', 'value' => 'Rio Prastiawan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'app.version', 'value' => '1.0.0', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'app.logo', 'value' => 'favicon.ico', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'meta.author', 'value' => 'Rio Prastiawan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'meta.description', 'value' => 'Aplikasi Pecinta Pendaki Gunung', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        );

        Setting::insert($settings);
    }
}
