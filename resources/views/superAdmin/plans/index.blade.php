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
    </div>

    <div class="row card-group-row pt-2">
        @foreach($plans as $plan)
        <div class="col-md-6 col-lg-4 card-group-row__col">
            <div class="card card-group-row__card pricing__card">
                <div class="card-body d-flex flex-column">
                    <div class="text-center">
                        <h4 class="pricing__title mb-0">{{ $plan->name }}</h4>
                        <div class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                            <span class="pricing__amount headings-color">{{ __('$') }}</span>

                            <span class="pricing__amount headings-color">{{$plan->price}}</span>
                            <span class="d-flex flex-column">
                                <span class="pricing__duration text-dark-gray">/ {{$plan->plan_interval}}</span>
                            </span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled pricing__features">

                                <li>trial period : {{ $plan->trial_period  }} {{$plan->trial_interval }}</li>
                                @if($plan->dashboard == '0')
                                <li style="text-decoration: line-through;">dashboard</li>
                                @else
                                <li>dashboard </li>
                                @endif

                                <li>{{ $plan->customers  }} customers</li>
                                <li>{{ $plan->products  }} products</li>
                                @if($plan->suppliers == '0')
                                <li style="text-decoration: line-through;">suppliers</li>
                                @else
                                <li>suppliers </li>
                                @endif
                                @if($plan->sales == '0')
                                <li style="text-decoration: line-through;">sales</li>
                                @else
                                <li>sales </li>
                                @endif
                                <li>{{ $plan->invoices  }} invoices</li>
                                @if($plan->complaints == '0')
                                <li style="text-decoration: line-through;">complaints</li>
                                @else
                                <li>complaints </li>
                                @endif
                                @if($plan->returns == '0')
                                <li style="text-decoration: line-through;">returns</li>
                                @else
                                <li>returns </li>
                                @endif
                                @if($plan->reports == '0')
                                <li style="text-decoration: line-through;">reports</li>
                                @else
                                <li>reports </li>
                                @endif


                            </ul>
                            <a href="/home" class="btn btn-success ml-3"> {{ __('get started') }}</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        @endforeach
    </div>



    @endsection