@extends('layouts.app')

@section('content')
<div class="container authors">
    <h1> <span>{{$title}}</span></h1>

    <div class="text-center mb-5">
        <div class="btn-group w-50 mx-auto" role="group" aria-label="Basic example">
          <a href="/verses" class="btn btn-secondary  {{Request::is('verses')?'active':''}}" >Все</a>
          <a href="/verses/popular" class="btn btn-secondary {{Request::is('verses/popular')?'active':''}}" >Популярные</a>
          <a href="/verses/latest" class="btn btn-secondary {{Request::is('verses/latest')?'active':''}}" >Новые</a>
        </div>
    </div>
    <div class="row">
    @foreach($verses as $verse)
        <article class="col-md-4 my-2">
        <div class="">
            <h4 class="d-flex justify-content-between">
                <a href="/verses/{{$verse->id}}">{{$verse->name}}</a>
                <div class="likes-views"> <i class="fa fa-heart" aria-hidden="true"></i> {{$verse->likes}} &nbsp;
                <i class="fa fa-eye" aria-hidden="true"></i> {{$verse->views}}</div>
            </h4>
            <div class="content">
            {!! $verse->content !!}
            </div>
            Автор: <a href="#">{{$verse->user->name}}</a> <br/>
            Категория: <a href="#">{{$verse->category->name}}</a><br/>
            Дата: {{\Carbon\Carbon::parse($verse->created_at)->format('d.m.Y')}}

            </div>
        </article>
    @endforeach
    </div>
    </div>
@endsection



@section('js')

@endsection