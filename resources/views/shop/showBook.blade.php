@extends('layouts.app')

@section('content')
    <div class="container authors">
         <h1><span>{{$book->name}}</span></h1>
            <div class="row books">
                <div class="col-md-4">
                     <img src="{{$book->path}}" class="img-fluid">
                </div>
                <div class="col-md-8">
                {{$book->price}}
                </div>
                <button class="btn btn-success my-2 my-sm-0">Купить</button>
            </div>

    </div>
@endsection



@section('js')

@endsection