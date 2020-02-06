@extends('layouts.app')

@section('content')
<div class="container authors">
    <h1><span>Магазин поезії</span></h1>
    <div class="row books">

        @foreach($books as $book)
             <div class="col-md-3">
                 <div class="book-card">
                     <div class="book-card-image">
                            <a href="/book/{{$book->id}}"><img class="card-img-top" src="{{$book->path}}" alt="..."></a>
                     </div>
                        <div class="book-card-body">
                            <h5>{{$book->name}}</h5>
                            <h5>{{$book->price}} грн.</h5>
                            <a href="/book/{{$book->id}}"> <button class="btn btn-default-shop mt-3 mr-3">Купить</button></a>
                        </div>
                 </div>
             </div>

        @endforeach
    </div>
</div>
@endsection



@section('js')

@endsection