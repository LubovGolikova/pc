@extends('layouts.app')

@section('content')
<div class="container  authors mb-5">
           <h1><span>{{ __('all.registration') }}</span></h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('all.name') }}</label>

                            <div class="col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('all.email_address') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('all.Confirm Password') }}</label>

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="role" value="author" id="role" {{ old('role') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="role">
                                        {{ __('all.Author?') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('all.registration') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-8 offset-md-4 text-center">
                                {{ __('all.Have you got account?') }} <a class="" href="{{ route('login') }}">{{ __('all.login') }}</a>
                            </div>
                         </div>
                         <div class="form-group  mb-0 mt-3  text-center">
                             <h2><span>{{ __('all.Fast authorization') }}</span></h2>
                             <div class="social-home">
                                 <a href="{{ route('auth.social', 'facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 <a href="{{ route('auth.social', 'google') }}"><i class="fa fa-google"  aria-hidden="true"></i></a>
                              </div>
                         </div>
                    </form>
                </div>

@endsection
