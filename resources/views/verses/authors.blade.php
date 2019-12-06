@extends('...layouts.app')

@section('content')
<h1>Авторы</h1>
    <div class="row flowers">
    @foreach($authors as $author)
        <div class="col-md-3">
            <a href="/verses/authors/{{$author->id}}" class=""> <img src="{{$author->path}}" class="img-fluid cover" style="width: 150px; height: 100px"></a>
            <div>
                 <a href="/verses/authors/{{$author->id}}">{{$author->name}}</a><br>

               <a href="/verses/authors/{{$author->id}}"> <button class="btn btn-success my-2 my-sm-0">read</button></a>
            </div>
            <br>
        </div>
     @endforeach
    </div>

    {{$authors->links()}}
@endsection
