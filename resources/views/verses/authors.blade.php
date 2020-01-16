@extends('layouts.app')

@section('content')
<div class="container authors">
<h1> <span>Нашi автори</span></h1>

<div class="text-center mb-5">
    <div class="btn-group w-50 mx-auto" role="group" aria-label="Basic example">
      <a href="/verses/authors" class="btn btn-secondary  {{Request::is('verses/authors')?'active':''}}" >Все</a>
      <a href="/verses/authors/popular" class="btn btn-secondary {{Request::is('verses/authors/popular')?'active':''}}" >Популярные</a>
      <a href="/verses/authors/latest" class="btn btn-secondary {{Request::is('verses/authors/latest')?'active':''}}" >Новые</a>
    </div>
</div>

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
    {{$authors->links()}}
</div>

@endsection
