@extends('auth.layouts.auth-app')

@section('content')
    @extends('auth.layouts.auth-app')

@section('content')
    <div class="text-center mb-3 login-main-left-header pt-4">
        <img src="img/favicon.png" class="img-fluid" alt="LOGO">
        <h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
        <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-outline-primary btn-block btn-md"> {{ __('Login') }}</button>
        </div>
    </form>
@endsection

@endsection
