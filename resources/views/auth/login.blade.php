@extends('layouts.auth')

@section('title', __('messages.login'))

@section('content')

@if( app('request')->input('success') == 1 )
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-success" role="alert">
            Account created successfully. You may log in below with the credentials you provided.
        </div>
    </div>
</div>
@endif
<h1 class="text-center h6 mb-4">{{ __('S\'authentifier') }}</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label class="text-label" for="email">{{ __('Email') }}:</label>
        <div class="input-group input-group-merge">
            <input id="email" name="email" type="email" class="form-control form-control-prepended @error('email') is-invalid @enderror" placeholder="user@example.com" value="{{ old('email') }}" autocomplete="email" autofocus required>
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="far fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="text-label" for="password">{{ __('Mot de passe') }}:</label>
        <div class="input-group input-group-merge">
            <input id="password" name="password" type="password" class="form-control form-control-prepended @error('password') is-invalid @enderror" placeholder="{{ __('Mot de passe') }}" required autocomplete="current-password">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-key"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">{{ __('messages.login') }}</button>
    </div>
    <div class="form-group text-center">
        <div class="custom-control custom-checkbox">
            <input id="remember" name="remember" type="checkbox" class="custom-control-input" checked="">
            <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
        </div>
    </div>

    <div class="form-group text-center">
        <a href="{{ route('password.request') }}">{{ __('Mot de passe oublier') }}</a> <br>
    </div>

    <div class="form-group text-center">
        <a href="{{ route('register') }}">{{ __('Créer Compte') }}</a> <br>
    </div>
</form>

@endsection