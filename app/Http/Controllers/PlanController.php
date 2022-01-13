<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuperAdmin\Plan\Store;
use App\Plan;
use App\Plan_Feature;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;



use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display the Form for Creating New Plan
     *
     */
    public function index()
    {
        $plan = DB::table('plans')
            ->join('plan__features', 'plans.id', '=', 'plan__features.plan_id')
            ->get();
        // $plan = Plan::join('Plan_Feature', 'plans.id' , '=' , 'plan_features.plan_id')->get();
        // $plan = Plan::oldest()->get();
        // $Plan_Feature = Plan_Feature::where('plan_id', $plan->id)->oldest()->get();
        return view('superAdmin.plans.index', [
            'plans' => $plan,
            // 'PlanFeatures' => $PlanFeature,
        ]);
    }
    public function create()
    {
        $plan = new Plan();
        $planFeature = new Plan_Feature();
        return view('superAdmin.plans.create', [
            'plan' => $plan,
            'planFeature' => $planFeature,
        ]);
    }

    /**
     * Store the plan in Database
     *
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store()
    {
       
//dd('hh');
        // Create new Plan
        
        $plan = new Plan();

        request()->validate([

            'name' => 'required|string|max:150',
            'price' => 'required',
            'plan_interval' => 'required|string|max:150',
            'trial_period' => 'sometimes|integer|max:100000',
        ]);

       
        
        $plan->name = request('name');
        $plan->price = request('price');
        $plan->plan_period = 1;
        $plan->plan_interval = request('plan_interval');
        $plan->trial_period = request('trial_period');
        $plan->trial_interval = 'day';

        $plan->save();

        // Create new Plan Features

        $planFeature = new Plan_Feature();

        request()->validate([

            'dashboard' => 'required|boolean',
            'customers' => 'required|integer|max:100000',
            'invoices' => 'required|integer|max:100000',
            'products' => 'required|integer|max:100000',
            'suppliers' => 'required|boolean',
            'sales' => 'required|boolean',
            'complaints' => 'required|boolean',
            'returns' => 'required|boolean',
            'reports' => 'required|boolean',
        ]);

       
        
        $planFeature->dashboard = request('dashboard');
        $planFeature->customers = request('customers');
        $planFeature->invoices = request('invoices');
        $planFeature->products = request('products');
        $planFeature->suppliers = request('suppliers');
        $planFeature->sales = request('sales');
        $planFeature->complaints = request('complaints');
        $planFeature->returns = request('returns');
        $planFeature->reports = request('reports');

        $plan->PlanFeature()->save($planFeature);
        
        return redirect('/plans/show');
    }
    public function indexAdmin(){
         $plan = Plan::oldest()->get();

        // $planFeature = Plan_Feature::oldest()->get();
        // $plan = DB::table('plans')
        // ->join('plan__features', 'plans.id', '=', 'plan__features.plan_id')
        // ->get();

        return view('superAdmin.plans.indexAdmin', [
            'plans' => $plan,
            // 'planFeatures' => $planFeature,
        ]);
    }
    public function edit($id)
    {

         $plan = plan::find($id);
         $planFeature = Plan_Feature::find($id);
        
        return view('superAdmin.plans.edit', [
            'plan' => $plan,
            'planFeature' => $planFeature,

        ]);
    }
    public function update($id){

        $plan = plan::find($id);
        $planFeature = Plan_Feature::find($id);

        request()->validate([

            'name' => 'required|string|max:150',
            'price' => 'required',
            'plan_interval' => 'required|string|max:150',
            'trial_period' => 'sometimes|integer|max:100000',
        ]);
        $plan->name = request('name');
        $plan->price = request('price');
        $plan->plan_period = 1;
        $plan->plan_interval = request('plan_interval');
        $plan->trial_period = request('trial_period');
        $plan->trial_interval = 'day';

        $plan->save();
        request()->validate([

            'dashboard' => 'required|boolean',
            'customers' => 'required|integer|max:100000',
            'invoices' => 'required|integer|max:100000',
            'products' => 'required|integer|max:100000',
            'suppliers' => 'required|boolean',
            'sales' => 'required|boolean',
            'complaints' => 'required|boolean',
            'returns' => 'required|boolean',
            'reports' => 'required|boolean',
        ]);

       
        
        $planFeature->dashboard = request('dashboard');
        $planFeature->customers = request('customers');
        $planFeature->invoices = request('invoices');
        $planFeature->products = request('products');
        $planFeature->suppliers = request('suppliers');
        $planFeature->sales = request('sales');
        $planFeature->complaints = request('complaints');
        $planFeature->returns = request('returns');
        $planFeature->reports = request('reports');

        $plan->PlanFeature()->save($planFeature);
        
        return redirect('/plans/show');

    }

    public function delete($id)
    {
        $plan = Plan::find($id);
        $plan->delete();

        return redirect('/plans/showAdmin');
    }
}
