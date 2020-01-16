@extends('layouts.app')

@section('content')
<div class="container authors">
    <h1><span>{{$verse->name}}</span></h1>

        <article>
            {!!$verse->content!!}
            <a href="/verses/authors/{{$verse->user->id}}">{{$verse->user->name}}</a>
            <a href="/verses/category/{{$verse->category->slug}}">{{$verse->category->name}}</a>
            <i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($verse->created_at)->format('d.m.Y')}}
            <i class="fa fa-heart-o add-like" aria-hidden="true" data-id="{{$verse->id}}"></i> <span class="like-count">{{$verse->likes}}</span>
            <i class="fa fa-eye" aria-hidden="true"></i> {{$verse->views}}
        </article>

</div>
@endsection



@section('js')

@endsection