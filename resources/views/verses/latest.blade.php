@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
    <h1> <span>{{$title}}</span></h1>

    <div class="container-authors-full">
           <div class="text-left px-5 d-flex flex-column mb-5">
               <a href="/verses" class="tr {{Request::is('verses')?'tr-active':''}}" >Все</a><br>
               <a href="/verses/popular" class="tr  {{Request::is('verses/popular')?'tr-active':''}}" >Популярные</a><br>
               <a href="/verses/latest" class=" tr {{Request::is('verses/latest')?'tr-active':''}}" >Новые</a>
           </div>
           <div class="text-right px-5 ">
                    <div class="row">
                    @foreach($verses as $verse)
                        <article class="col-md-4 my-2">
                        <div class="">
                            <h4 class="d-flex justify-content-between">
                                <a href="/verses/{{$verse->id}}">{{$verse->name}}</a>
                                <div class="likes-views"> <i class="fa fa-heart" aria-hidden="true"></i> {{$verse->likes}} &nbsp;
                                <i class="fa fa-eye" aria-hidden="true"></i> {{$verse->views}}</div>
                            </h4>
                            <br>
                            <br>
                            <div class="content">
                            {!! $verse->shortContent() !!}
                            </div>
                            <p>----------------------</p>
                            Автор: <a href="#">{{$verse->user->name}}</a> <br/>
                            Категория: <a href="#">{{$verse->category->name}}</a><br/>
                            Дата: {{\Carbon\Carbon::parse($verse->created_at)->format('d.m.Y')}}

                            </div>
                        </article>
                    @endforeach
            </div>
            </div>
    </div>
    {{$verses->links()}}
</div>
@endsection



@section('js')

@endsection