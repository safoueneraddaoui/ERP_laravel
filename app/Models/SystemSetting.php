<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'option',
        'value'
    ];

    /**
     * Default Company Settings
     *
     * @var array
     */
    public static $defaultSettings = [
        'application_name' => 'Foxtrot',
        'application_logo' => '/assets/images/vision-erp.png',
        'application_favicon' => '/assets/images/fox-logo-black.svg',
        //'application_currency' => 'USD',
        'meta_description' => 'Foxtrot - Customer, Invoice and Expense Management System',
        'meta_keywords' => 'accounting, billing, business management, client management',
        'theme' => 'bikin'
    ];

    /**
     * Set new or update existing System Settings.
     *
     * @param string $key
     * @param string $setting
     *
     * @return void
     */
    public static function setSetting($key, $setting)
    {
        $old = self::whereOption($key)->first();

        if ($old) {
            $old->value = $setting;
            $old->save();
            return;
        }

        $set = new SystemSetting();
        $set->option = $key;
        $set->value = $setting;
        $set->save();
    }
 
    /**
     * Get Default Company Setting.
     *
     * @param string $key
     *
     * @return string|null
     */
    public static function getDefaultSetting($key)
    {
        $setting = self::$defaultSettings[$key];

        if ($setting) {
            return $setting;
        } else {
            return null;
        }
    }

    /**
     * Get System Setting.
     *
     * @param string $key
     *
     * @return string|null
     */
    public static function getSetting($key)
    {
        $setting = static::whereOption($key)->first();

        if ($setting) {
            return $setting->value;
        } else {
            return self::getDefaultSetting($key);
        }
    }

    

}
