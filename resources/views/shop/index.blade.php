@extends('layouts.app')

@section('content')
<div class="container authors">
    <h1><span>Магазин</span></h1>
    <div class="row books">
        @foreach($books as $book)
             <div class="col-md-3">
                <a href="/book/{{$book->id}}"> <img src="{{$book->path}}" class="img-fluid"></a>
                    <div>
                        <a href="/book/{{$book->id}}"> <button class="btn btn-success my-2 my-sm-0">Купить</button></a>
                    </div>
             </div>

        @endforeach
    </div>
</div>
@endsection



@section('js')

@endsection