@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <div class="bg-primary">
        <div class="text-primary text-center p-4">
            <h5 class="text-white font-size-20">Welcome Back !</h5>
            <p class="text-white-50">Sign in to continue </p>
            <a href="" class="logo logo-admin">
            </a>
        </div>
    </div>
    <div class="p-3">
        <form class="mt-4" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 row">
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 text-end">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>


        </form>
    @endsection
