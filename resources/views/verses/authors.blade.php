@extends('layouts.app')

@section('content')
<div class="container authors">
<h1> <span>Авторы</span></h1>
    <div class="row author">
    @foreach($authors as $author)
        <div class="col-md-3">
            <a href="/verses/authors/{{$author->id}}" class="">
            <img src="{{$author->path}}" class="img-fluid cover"></a>
            <div>
                 <a href="/verses/authors/{{$author->id}}">{{$author->name}}</a><br>

               <a href="/verses/authors/{{$author->id}}"> <button class="btn btn-success my-2 my-sm-0">read</button></a>
            </div>
            <br>
        </div>
     @endforeach
    </div>
</div>
    {{$authors->links()}}
@endsection
