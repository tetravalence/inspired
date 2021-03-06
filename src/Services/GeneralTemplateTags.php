<?php

namespace Tetravalence\Inspired\Services;

use Tetravalence\Inspired\InspiredSetting as Settings;

class GeneralTemplateTags
{
    /**
     * The settings model implementation.
     *
     * @var \Tetravalence\Inspired\InspiredSetting
     */
    public $settings;

    /**
     * Create a new Settings instance.
     *
     * @param \Tetravalence\Inspired\InspiredSetting
     * @return void
     */
    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Gets Website title.
     *
     * @return string
     */
    public function title()
    {
        $current_title = $this->settings->getValue('title');

        if (is_string($current_title)) {
            return $current_title;
        }

        return config('inspired.settings.title', 'Get Inspired');
    }

    /**
     * Gets Website description.
     *
     * @return string
     */
    public function description()
    {
        $current_description = $this->settings->getValue('description');

        if (is_string($current_description)) {
            return $current_description;
        }

        return config('inspired.settings.description',
            'Just another Inspired site');
    }

    /**
     */
    public function url()
    {
        $current_url = $this->settings->getValue('baseurl');

        if (is_string($current_url)) {
            return $current_url;
        }

        return config('app.url');
    }
}
