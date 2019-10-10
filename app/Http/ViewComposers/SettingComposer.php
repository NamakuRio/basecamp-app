<?php

namespace App\Http\ViewComposers;

use App\Models\Setting;
use Illuminate\View\View;

class SettingComposer
{
    public function compose(View $view)
    {
        $settings = Setting::get();
        $view->with([
            'app_name' => $settings->where('name', 'app.name')->first()->value,
            'app_description' => $settings->where('name', 'app.description')->first()->value,
            'app_author' => $settings->where('name', 'app.author')->first()->value,
            'app_version' => $settings->where('name', 'app.version')->first()->value,
            'app_logo' => $settings->where('name', 'app.logo')->first()->value,
            'meta_author' => $settings->where('name', 'meta.author')->first()->value,
            'meta_description' => $settings->where('name', 'meta.description')->first()->value
        ]);
    }
}
