<?php

namespace Tetravalence\Inspire;

use Tetravalence\Inspire\InspireSettings as Settings;

class Template
{
    public static function getVendor()
    {
        $current_vendor = Settings::where('settings_key', 'vendor')->
            first()->toArray();

        if (is_string($current_vendor['settings_value'])) {
            return $current_vendor;
        }

        return config('inspire.template.vendor', 'tetravalence');
    }

    public static function getName()
    {
        $current_name = Settings::where('settings_key', 'template')->
            first()->toArray();

        if (is_string($current_name['settings_value'])) {
            return $current_name;
        }

        return config('inspire.template.name', 'default');
    }

}
