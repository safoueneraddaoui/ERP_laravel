@extends('layouts.app')

@section('content')
<div class="page__heading d-flex align-items-center">
    <div class="flex">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('edit_plan') }}</li>
            </ol>
        </nav>
        <h1 class="m-0 h3">{{ __('edit_plan') }}</h1>
    </div>
    <form method="POST" id="delete-plan" action="{{route('delete.plan',  ['plan' => $plan->id])}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger ml-3 delete-confirm" onclick="return confirm('Sure Want Delete?')" >delete plan</button>
    </form>
</div>
<form action="{{ route('update.plan', ['plan' => $plan->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                                <option value="month" @if (old('plan_interval')=='month' ) selected="selected" @endif {{ $plan->plan_interval === 'month' ? 'selected=""' : ''}}>{{ __('month') }}</option>
                                <option value="year" @if (old('plan_interval')=='year' ) selected="selected" @endif {{ $plan->plan_interval === 'year' ? 'selected=""' : ''}}>{{ __('year') }}</option>
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
                            <?php
                            $ss = $planFeature->dashboard;
                            ?>
                            <select name="dashboard" class="form-control" required>
                                <option value="1" @if (old('dashboard')=='1' ) selected="selected" @endif @if ($ss=='1' ) selected="selected" @endif {{ $planFeature->dashboard === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('dashboard')=='0' ) selected="selected" @endif @if ($ss=='0' ) selected="selected" @endif {{ $planFeature->dashboard === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                                <!-- <option value="0" {{ $planFeature->dashboard === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                                <option value="month" @if (old('plan_interval')=='month' ) selected="selected" @endif {{ $plan->plan_interval === 'month' ? 'selected=""' : ''}}>{{ __('month') }}</option>
                                <option value="year" @if (old('plan_interval')=='year' ) selected="selected" @endif {{ $plan->plan_interval === 'year' ? 'selected=""' : ''}}>{{ __('year') }}</option>
                             -->
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="customers">{{ __('customers') }}</label>
                            <input name="customers" type="number" class="form-control" placeholder="{{ __('customers') }}" value="{{ $planFeature->customers }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="invoices">{{ __('invoices') }}</label>
                            <input name="invoices" type="number" class="form-control" placeholder="{{ __('invoices') }}" value="{{ $planFeature->invoices }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="products">{{ __('products') }}</label>
                            <input name="products" type="number" class="form-control" placeholder="{{ __('products') }}" value="{{ $planFeature->products }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="suppliers">{{ __('feature_can_view_suppliers') }}</label>
                            <?php
                            $s = $planFeature->suppliers;
                            ?>
                            <select name="suppliers" class="form-control" required>
                                <option value="1" @if (old('suppliers')=='1' ) selected="selected" @endif @if ($s=='1' ) selected="selected" @endif {{ $planFeature->suppliers === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('suppliers')=='0' ) selected="selected" @endif @if ($s=='0' ) selected="selected" @endif {{ $planFeature->suppliers === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                            <!-- <select name="suppliers" class="form-control" required>
                                <option value="1" {{ $planFeature->suppliers === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->suppliers === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="sales">{{ __('feature_can_view_sales') }}</label>
                            <?php
                            $sss = $planFeature->sales;
                            ?>
                            <select name="sales" class="form-control" required>
                                <option value="1" @if (old('sales')=='1' ) selected="selected" @endif @if ($sss=='1' ) selected="selected" @endif {{ $planFeature->sales === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('sales')=='0' ) selected="selected" @endif @if ($sss=='0' ) selected="selected" @endif {{ $planFeature->sales === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                            <!-- <select name="sales" class="form-control" required>
                                <option value="1" {{ $planFeature->sales === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->sales === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="complaints">{{ __('feature_can_view_complaints') }}</label>
                            <?php
                            $c = $planFeature->complaints;
                            ?>
                            <select name="complaints" class="form-control" required>
                                <option value="1" @if (old('complaints')=='1' ) selected="selected" @endif @if ($c=='1' ) selected="selected" @endif {{ $planFeature->complaints === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('complaints')=='0' ) selected="selected" @endif @if ($c=='0' ) selected="selected" @endif {{ $planFeature->complaints === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                            <!-- <select name="complaints" class="form-control" required>
                                <option value="1" {{ $planFeature->complaints === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->complaints === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label for="returns">{{ __('feature_can_view_returns') }}</label>
                            <?php
                            $cc = $planFeature->returns;
                            ?>
                            <select name="returns" class="form-control" required>
                                <option value="1" @if (old('returns')=='1' ) selected="selected" @endif @if ($cc=='1' ) selected="selected" @endif {{ $planFeature->returns === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('returns')=='0' ) selected="selected" @endif @if ($cc=='0' ) selected="selected" @endif {{ $planFeature->returns === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                            <!-- <select name="returns" class="form-control" required>
                                <option value="1" {{ $planFeature->returns === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->returns === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group required">
                            <label for="reports">{{ __('feature_can_view_reports') }}</label>
                            <?php
                            $ccc = $planFeature->reports;
                            ?>
                            <select name="reports" class="form-control" required>
                                <option value="1" @if (old('reports')=='1' ) selected="selected" @endif @if ($ccc=='1' ) selected="selected" @endif {{ $planFeature->reports === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" @if (old('reports')=='0' ) selected="selected" @endif @if ($ccc=='0' ) selected="selected" @endif {{ $planFeature->reports === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select>
                            <!-- <select name="reports" class="form-control" required>
                                <option value="1" {{ $planFeature->reports === 'yes' ? 'selected=""' : ''}}>{{ __('yes') }}</option>
                                <option value="0" {{ $planFeature->reports === 'no' ? 'selected=""' : ''}}>{{ __('no') }}</option>
                            </select> -->
                        </div>
                    </div>
                </div>

                <div class="form-group text-center mt-5">
                    <button class="btn btn-primary save_form_button" type="submit">{{ __('update_plan') }}</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection