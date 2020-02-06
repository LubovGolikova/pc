@extends('layouts.app')

@section('content')
<div class="container  authors mb-5">
        <h1><span>{{ __('all.login') }}</span></h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('all.email_address') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('all.password') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('all.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('all.Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                   {{ __('all.login') }}
                                </button>
                            </div>
                        </div>

                         <div class="form-group row mb-0 mt-3">
                            <div class="col-md-8 offset-md-4 text-center">
                                {{ __('all.No account?') }} <a class="" href="{{ route('register') }}">{{ __('all.registration') }}</a>
                            </div>
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
