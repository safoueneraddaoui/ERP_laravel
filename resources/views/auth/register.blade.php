@extends('layouts.auth')

@section('title', __('messages.register'))

@section('content')
<h1 class="text-center h6 mb-4">{{ __('Inscription') }}</h1>

<form id="auth-form" action="{{ route('register') }}" method="POST" novalidate>
    @csrf

    <div class="form-group">
        <label class="text-label" for="first_name">{{ __('Compte') }}:</label>
        <div class="input-group">
            <input id="account" name="account" type="text"
                class="form-control form-control-prepended @error('account') is-invalid @enderror"
                placeholder="{{ __('Compte') }}" value="{{ old('account') }}"
                 required autocomplete="account" autofocus>
            @error('account')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="text-label" for="Name">{{ __('Nom') }}:</label>
        <div class="input-group">
            <input id="name" name="name" type="text"
                class="form-control form-control-prepended @error('name') is-invalid @enderror"
                placeholder="{{ __('Nom') }}" value="{{ old('name') }}"
                required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="text-label" for="email">{{ __('Email') }}:</label>
        <div class="input-group">
            <input id="email" name="email" type="email"
                class="form-control form-control-prepended @error('email') is-invalid @enderror"
                placeholder="email@email.com" value="{{ old('email') }}" autocomplete="email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="text-label" for="password">{{ __('mot de passe') }}:</label>
        <div class="input-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
        </div>
    </div>

    <div class="form-group">
        <label class="text-label" for="password-confirm">{{ __('Confirmer mot de passe') }}:</label>
        <div class="input-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-block btn-primary" type="submit" data-callback="onSubmit" data-action="submit">{{ __('Enregistrer') }}</button>
    </div>

    <div class="form-group text-center">
        <a href="{{ route('login') }}">{{ __('login') }}</a> <br>
    </div>
</form>

@endsection
