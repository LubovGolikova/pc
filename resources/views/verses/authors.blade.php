@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
    <h1> <span>Нашi автори</span></h1>
    <div class="container-authors-full">
        <div class="text-left px-5 d-flex flex-column mb-5">
            <a href="/verses/authors" class="tr {{Request::is('verses/authors')?'tr-active':''}}" >Все</a><br>
            <a href="/verses/authors/popular" class="tr  {{Request::is('verses/authors/popular')?'tr-active':''}}" >Популярные</a><br>
            <a href="/verses/authors/latest" class=" tr {{Request::is('verses/authors/latest')?'tr-active':''}}" >Новые</a>
        </div>
        <div class="text-right px-5 ">
                <div class="row author">
                    @foreach($authors as $author)
                    <div class="col-md-4 text-center">
                      <a href="/verses/authors/{{$author->id}}" class="">
                        <img src="{{$author->path}}" class="img-fluid cover img-thumbnail" style="max-width: 214px"></a>
                        <div>
                             <a href="/profile/{{$author->id}}" class="author-name mt-3 d-block">{{$author->name}}</a><br>
                                <p>{{$author->shortDescription()}}</p>
                             {{--<a href="/verses/authors/{{$author->id}}" class="btn btn-default mx-auto d-inline-block float-none">read</a>--}}
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    {{$authors->links()}}
</div>

@endsection
