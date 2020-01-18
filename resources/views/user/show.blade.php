@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
   <h1><span>{{$user->name}}</span></h1>
   <div class="row">
    <div class="col-md-4">
        <img src="{{$user->path}}" alt=""/>
    </div>
    <div class="col-md-8">
    <h3>Биография</h3>
        {{$user->description}}
    </div>
   </div>

        <h3>Збірки віршів</h3>
        <div class="row">
        @foreach($user->books as $book)
        <div class="col-md-3">
            @include('shop.book')
        </div>
        @endforeach
    </div>
</div>
@endsection
