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
<div id="containerId">
<header id="headerTotal" class="py-md-2 pb-5">
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
    <div  class="logo">
        <img src="{{asset('assets/images/lg.png')}}"
             alt="logoIcon">
    </div>
    {{--<a class="navbar-brand " href="/">{{ __('all.poetry') }} <br>{{ __('all.club') }}</a>--}}
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{Request::is('/')?'active':''}}">
                <a class="nav-link" href="/">{{ __('all.home') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('verses/authors')?'active':''}}">
                <a class="nav-link" href="/verses/authors">{{ __('all.authors') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('verses')?'active':''}}">
                <a class="nav-link" href="/verses">{{ __('all.verses') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('shop')?'active':''}}">
                <a class="nav-link" href="/shop">{{ __('all.shop') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('www')?'active':''}}">
                <a class="nav-link" href="#">{{ __('all.contacts') }}</a>
            </li>
            <li class="nav-item {{Request::is('about')?'active':''}}">
                <a class="nav-link" href="/about">{{ __('all.registration') }}</a>
            </li>
            @guest
                <li class="nav-item"><a  href="{{ route('login') }}" class="sign-in ml-lg-auto nav-link"><i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('all.login') }}</a></li>
            @else
                <li class="nav-item"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a></li>

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
        </ul>

        <div class="form-inline my-2 my-lg-0 col-lg-3   langs">


            <div class="ml-4">
                <a href="<?= route('setlocale', ['lang' => 'ua']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === null ? 'class="active"' : '' ?>>Ua</a> |
                <a href="<?= route('setlocale', ['lang' => 'ru']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'ru' ? 'class="active"' : '' ?>>Ru</a> |
                <a href="<?= route('setlocale', ['lang' => 'en']) ?>" <?= App\Http\Middleware\LocaleMiddleware::getLocale() === 'en' ? 'class="active"' : '' ?>>En</a>
            </div>

        </div>

    </div>
</form>
</nav>
 <div class="search-line fluid container d-flex flex-row justify-content-center align-items-center mb-5">
 <form class=" my-2 my-lg-0 col-lg-6  search form-inline" method="get" action="/search">
     <input class="form-control mr-sm-2" name="s" type="text" placeholder="Пошук" aria-label="Search">
     <button class="btn btn-outline-blue my-2 my-sm-0" type="submit">Найти</button>
 </form>

    </div>
{{--<section class="header-main ">--}}
{{--</section>--}}

</header>
<section id="bodyContainer">

