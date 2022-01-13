<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ThemeSetting;
use Illuminate\Support\Facades\DB;


class ThemeSettingController extends Controller
{
    /**
     * Display Edit Theme Settings Page
     *
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $features_active = DB::table('theme_settings')->where('value', '=', 'features_active')->get();
        $data = DB:: table('theme_settings')->where('option', '=', 'features_active')->get();
        //return dd($data);
        return view('themes.'.$request->theme.'.settings',[
            'features_active' => $features_active,
            'data' => $data
        ]);
    }

    /**
     * Update Theme Settings
     *
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $theme = $request->theme;

        // Set settings
        foreach ($request->except('_token') as $key => $value) {
            ThemeSetting::setSetting($theme, $key, $value);
        }
 
        session()->flash('alert-success', __('Modification avec succès'));
        return redirect()->route('super_admin.settings.theme', $theme);
    }
}
