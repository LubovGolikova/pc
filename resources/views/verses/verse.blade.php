@extends('layouts.app')

@section('content')
<div class="test">
    <div class="container authors verse mb-5">
        <h1><span>{{$verse->user->name}}</span></h1>
        <div class="bg-verse-container">
    <div class="bg-verse">
            <article>
                {!!$verse->content!!}
                <a href="/verses/authors/{{$verse->user->id}}">{{$verse->user->name}}</a>
                <a href="/verses/category/{{$verse->category->slug}}">{{$verse->category->name}}</a>
                <i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($verse->created_at)->format('d.m.Y')}}
                <i class="fa fa-heart-o add-like" aria-hidden="true" data-id="{{$verse->id}}"></i> <span class="like-count">{{$verse->likes}}</span>
                <i class="fa fa-eye" aria-hidden="true"></i> {{$verse->views}}
            </article>
    </div>
    </div>
    </div>
</div>
@endsection



@section('js')

@endsection