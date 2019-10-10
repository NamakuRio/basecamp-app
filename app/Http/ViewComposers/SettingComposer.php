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
            'app.name' => $settings->where('name', 'app.name')->first()->value,
            'app.description' => $settings->where('name', 'app.description')->first()->value,
            'app.author' => $settings->where('name', 'app.author')->first()->value,
            'app.version' => $settings->where('name', 'app.version')->first()->value,
            'app.logo' => $settings->where('name', 'app.logo')->first()->value,
            'meta.author' => $settings->where('name', 'meta.author')->first()->value,
            'meta.description' => $settings->where('name', 'meta.description')->first()->value
        ]);
    }
}
