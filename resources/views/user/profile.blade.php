@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
   <h1><span>{{ __('all.welcome') }}, {{Auth::user()->name}}!</span></h1>
    <div class="col">
        <div class="col-md-4"><a href="/profile/verses/create">{{ __('all.addVerse') }}</a></div>
        <div class="col-md-4"><a href="{{route('account')}}">{{ __('all.data') }}</a></div>
        <div class="col-md-4"><a href="/profile/books/create">{{ __('all.addBook') }}</a></div>
    </div>
</div>
@endsection
