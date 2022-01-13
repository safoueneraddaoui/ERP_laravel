<?php

use App\Helpers\Initials;
use App\Models\SystemSetting;
use App\Models\ThemeSetting;


if (! function_exists('initials')) {
    /**
     * Get the initials of given name
     *
     * @param string $string
     *
     * @return string
     */
    function initials($string)
    {
        return Initials::generate($string);
    }
}

if (! function_exists('get_system_setting')) {
    /**
     * get_system_setting
     *
     * @return string
     */
    function get_system_setting($key)
    {
        return SystemSetting::getSetting($key);
        //echo "hello";
    }
}

if (! function_exists('get_theme_setting')) {
    /**
     * get_theme_setting
     *
     * @return string
     */
    function get_theme_setting($theme, $key)
    {
        return ThemeSetting::getSetting($theme, $key);
    }
}


if (! function_exists('get_languages_select2_array')) {
    /**
     * get_languages_select2_array
     *
     * @return array
     */
    function get_languages_select2_array()
    {
        return [
            ['id' => 'en', 'text' => __('messages.english')],
        ];
    }
}

if (! function_exists('get_months_select2_array')) {
    /**
     * get_months_select2_array
     *
     * @return array
     */
    function get_months_select2_array()
    {
        return [
            ['id' => 1, 'text' => __('messages.january')],
            ['id' => 2, 'text' => __('messages.february')],
            ['id' => 3, 'text' => __('messages.march')],
            ['id' => 4, 'text' => __('messages.april')],
            ['id' => 5, 'text' => __('messages.may')],
            ['id' => 6, 'text' => __('messages.june')],
            ['id' => 7, 'text' => __('messages.july')],
            ['id' => 8, 'text' => __('messages.august')],
            ['id' => 9, 'text' => __('messages.september')],
            ['id' => 10, 'text' => __('messages.november')],
            ['id' => 11, 'text' => __('messages.october')],
            ['id' => 12, 'text' => __('messages.december')],
        ];
    }
}

if (! function_exists('get_custom_field_value_key')) {
    /**
     * get_custom_field_value_key
     *
     * @param string $type
     *
     * @return string
     */
    function get_custom_field_value_key($type)
    {
        switch ($type) {
            case 'Input':
                return 'string_answer';
    
            case 'TextArea':
                return 'string_answer';
    
            case 'Phone':
                return 'number_answer';
    
            case 'Url':
                return 'string_answer';
    
            case 'Number':
                return 'number_answer';
    
            case 'Dropdown':
                return 'string_answer';
    
            case 'Switch':
                return 'boolean_answer';
    
            case 'Date':
                return 'date_answer';
    
            case 'Time':
                return 'time_answer';
    
            case 'DateTime':
                return 'date_time_answer';
    
            default:
                return 'string_answer';
        }
    }
}
