<?php

namespace App\Http\Controllers;

use App\Models\SystemSetting;
use Illuminate\Http\Request;
use App\Plan;
use App\Plan_Feature;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();

        //If user is authenticated
        if ($user) {
            if ($user->hasRole('super_admin')) {
                return redirect()->route('super_admin.users');
            }

            /*$currentCompany = $user->currentCompany();
            return redirect()->route('dashboard', ['company_uid' => $currentCompany->uid]);*/
        }

        $plan = DB::table('plans')
            ->join('plan__features', 'plans.id', '=', 'plan__features.plan_id')
            ->get();
            
        $data = DB:: table('theme_settings')->where('option', '=', 'features_active')->get();

        //$features_active = DB::table('theme_settings')->select('value')->where('option', '=', 'features_active')->get();
        $features_active = DB::table('theme_settings')->where('option', '=', 'features_active')->get();
        //return dd($features_active);

        return view('themes.bikin.home', [
            'plans' => $plan,
            'features_active' => $features_active,
             'data' => $data,
        ]);
    }

    public function dashboard()
    {
        return view('superAdmin.dashboard.index');
    }
}
