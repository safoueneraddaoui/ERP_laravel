@extends('layouts.app')

@section('content')
<div class="page__heading d-flex align-items-center">
    <div class="flex">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('create_plan') }}</li>
            </ol>
        </nav>
        <h1 class="m-0 h3">{{ __('create_plan') }}</h1>
    </div>
</div>
<form action="{{ route('super_admin.plans.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">{{ __('plan_information') }}</strong></p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="name">{{ __('name') }}</label>
                            <input name="name" type="text" class="form-control" placeholder="{{ __('name') }}" value="{{ $plan->name }}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="price">{{ __('price') }}</label>
                            <input name="price" type="text" class="form-control price_input" placeholder="{{ __('price') }}" autocomplete="off" value="{{ $plan->price ?? 0 }}" required>
                            <small class="form-text text-muted">{{ __('plan_price_helper') }}</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="plan_interval">{{ __('plan_interval') }}</label>
                            <select name="plan_interval" class="form-control" required>
                                <option value="month" {{ $plan->plan_interval === 'month' ? 'selected=""' : ''}}>{{ __('month') }}</option>
                                <option value="year" {{ $plan->plan_interval === 'year' ? 'selected=""' : ''}}>{{ __('year') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="trial_period">{{ __('trial_period') }}</label>
                            <input name="trial_period" type="number" class="form-control" placeholder="{{ __('trial_period') }}" value="{{ $plan->trial_period }}" required>
                            <small class="form-text text-muted">{{ __('plan_trial_period_helper') }}</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">{{ __('plan_features_information') }}</strong></p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="dashboard">{{ __('feature_can_view_dashboard') }}</label>
                            <select name="dashboard" class="form-control" required>
                                <option value="1" {{ $planFeature->dashboard === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->dashboard === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="customers">{{ __('customers') }}</label>
                            <input name="customers" type="number" class="form-control" placeholder="{{ __('customers') }}" value="{{ $planFeature->customers }}"required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="invoices">{{ __('invoices') }}</label>
                            <input name="invoices" type="number" class="form-control" placeholder="{{ __('invoices') }}" value="{{ $planFeature->invoices }}"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="products">{{ __('products') }}</label>
                            <input name="products" type="number" class="form-control" placeholder="{{ __('products') }}" value="{{ $planFeature->products }}"required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="suppliers">{{ __('feature_can_view_suppliers') }}</label>
                            <select name="suppliers" class="form-control" required>
                                <option value="1" {{ $planFeature->suppliers === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->suppliers === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="sales">{{ __('feature_can_view_sales') }}</label>
                            <select name="sales" class="form-control" required>
                                <option value="1" {{ $planFeature->sales === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->sales === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="complaints">{{ __('feature_can_view_complaints') }}</label>
                            <select name="complaints" class="form-control" required>
                                <option value="1" {{ $planFeature->complaints === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->complaints === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="returns">{{ __('feature_can_view_returns') }}</label>
                            <select name="returns" class="form-control" required>
                                <option value="1" {{ $planFeature->returns === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->returns === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="reports">{{ __('feature_can_view_reports') }}</label>
                            <select name="reports" class="form-control" required>
                                <option value="1" {{ $planFeature->reports === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->reports === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center mt-5">
                    <button class="btn btn-primary save_form_button" type="submit">{{ __('save_plan') }}</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection