@extends('layouts.domainApp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Connectez-vous à votre compte') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <label for="account" class="col-md-8 offset-md-2">{{ __('Enter Votre') }} <strong>{{ __('Compte (URL)') }}</strong></label>
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-2 text-md-right">
                                    <input id="account" type="text" class="form-control text-right inline @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}" placeholder="votre-url" required autofocus>
                                </div>
                                <div class="col-md-4 text-lg-left">
                                    <span class="sign-in-tld">.{{ config('app.url_base') }}</span>
                                </div>
                            </div>
                            <div class="row">
                                @error('account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2 text-md-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Continue') }} →
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection