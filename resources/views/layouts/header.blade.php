<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PoetryClub') }}</title>

    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
    <div  class="logo">
        <img src="{{asset('assets/PoetryClub.png')}}"
             alt="logoIcon"
             height="92"
             width="92"
        >
    </div>
    <a class="navbar-brand " href="/">{{ __('all.poetry') }} <br>{{ __('all.club') }}</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto col-lg-3 pl-3">
            <li class="nav-item active">
                <a class="nav-link" href="/shop">{{ __('all.shop') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('all.help') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('all.about') }}</a>
            </li>
        </ul>
            <form class=" my-2 my-lg-0 col-lg-6  search">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </form>
        <div class="form-inline my-2 my-lg-0 col-lg-3   langs">
            @guest
                <a href="{{ route('login') }}" class="sign-in ml-lg-auto"><i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('all.login') }}</a>
            @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('all.logout') }}
                    </a>
                     <a class="dropdown-item"  href="{{ route('profile') }}">{{ __('all.profile') }}</a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest

            <div class="ml-4">
                <a href="<?= route('setlocale', ['lang' => 'ua']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === null ? 'class="active"' : '' ?>>Ua</a> |
                <a href="<?= route('setlocale', ['lang' => 'ru']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'ru' ? 'class="active"' : '' ?>>Ru</a> |
                <a href="<?= route('setlocale', ['lang' => 'en']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'en' ? 'class="active"' : '' ?>>En</a>
            </div>

        </div>

    </div>
</form>
</nav>

<div class="container-fluid">
    <div class="row">