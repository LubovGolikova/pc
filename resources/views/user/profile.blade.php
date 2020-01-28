@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
   <h1><span>Добро пожаловать, {{Auth::user()->name}}!</span></h1>
    <div class="col">
        <div class="col-md-4"><a href="/profile/verses/create">Добавить стих</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
        <div class="col-md-4"><a href="/profile/books/create">Добавить rybue</a></div>
        {{--<div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>--}}
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>--}}
        {{--<div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>--}}
        {{--<div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>--}}
    {{--</div>--}}
</div>
@endsection
