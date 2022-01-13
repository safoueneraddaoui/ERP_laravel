<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;

class SettingController extends Controller



{
    /**
     * Display Edit Application Settings Page
     *
     * @return \Illuminate\Http\Response
     */
    public function application()
    {
        return view('superAdmin.settings.application');
    }

    /**
     * Update Application Settings
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     * 
     * 
     */
    public function application_update(Request $request)
    {
        

        // Validate
        $request->validate([
            'application_name' => 'required|string|max:140',
            //'application_currency' => 'required|string',
            'meta_description' => 'required|string|max:200',
            'meta_keywords' => 'required|string|max:200',
        ]);

        // Update settings
        SystemSetting::setSetting('application_name', $request->application_name);
        SystemSetting::setSetting('application_currency', $request->application_currency);
        SystemSetting::setSetting('meta_description', $request->meta_description);
        SystemSetting::setSetting('meta_keywords', $request->meta_keywords);

        // Update favicon
        if ($request->favicon) {
            $request->validate(['favicon' => 'required|image|mimes:png,jpg|max:2048']);
            $path = $request->favicon->storeAs('favicons', 'favicon.'.$request->favicon->getClientOriginalExtension(), 'public_dir');
            SystemSetting::setSetting('application_favicon', '/uploads/'.$path);
        }

        // Update logo
        if ($request->logo) {
            $request->validate(['logo' => 'required|image|mimes:png,jpg|max:2048']);
            $path = $request->logo->storeAs('logo', 'logo.'.$request->logo->getClientOriginalExtension(), 'public_dir');
            SystemSetting::setSetting('application_logo', '/uploads/'.$path);
        }
 
        session()->flash('alert-success', __('Modification avec succès'));
        return redirect()->route('super_admin.settings.application');
    }

}
