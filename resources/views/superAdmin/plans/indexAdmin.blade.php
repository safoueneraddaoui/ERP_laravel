@extends('layouts.app')

@section('content')


<body>
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('plans') }}</li>
                </ol>
            </nav>
            <h1 class="m-0">{{ __('plans') }}</h1>
        </div>
        <a href="{{ route('super_admin.plans.create') }}" class="btn btn-success ml-3"><i class="material-icons">+</i> {{ __('create_plan') }}</a>
    </div>

    <div class="table-responsive">
        <table class="table mb-0 thead-border-top-0 table-striped">
            <thead>
                <tr>
                    <th class="w-30px" class="text-center">{{('#id') }}</th>
                    <th>{{('name') }}</th>
                    <th>{{('price') }}</th>
                    <th>{{('plan_interval') }}</th>
                    <th>{{('trial_period') }}</th>
                    <th class="text-center width: 120px;">{{('created_at') }}</th>
                    <th class="w-50px">{{('edit') }}</th>
                </tr> 
            </thead>
            <tbody class="list" id="plans">
                @foreach ($plans as $plan)
                    <tr>
                        <td>
                            <a href="{{ route('edit.plan', $plan->id ) }}" class="badge">#{{ $plan->id }}</a>
                        </td>
                        <td> 
                            <a href="{{ route('edit.plan', $plan->id ) }}" class="mb-0">{{ $plan->name }}</a>
                        </td>
                        <td> 
                            <p class="mb-0">${{$plan->price}}</p>
                        </td>
                        <td>
                            <p class="mb-0 text-uppercase">{{ ($plan->plan_interval) }}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{ $plan->trial_period }} {{ __('days') }}</p>
                        </td>
                        
                        <td><a href="{{ route('edit.plan', $plan->id ) }}" class="btn btn-sm btn-link"><i class="material-icons icon-16pt">edit</i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    @endsection