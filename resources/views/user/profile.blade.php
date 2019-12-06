@extends('layouts.app-full')

@section('content')
   <h1>Добро пожаловать, {{Auth::user()->name}}!</h1>
    <div class="row">
        <div class="col-md-4"><a href="/profile/verses/create">Добавить стих</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
    </div>
    <div class="row">
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">Личные данные</a></div>
    </div>

@endsection
