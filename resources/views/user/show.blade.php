@extends('layouts.app')

@section('content')
<div class="container authors mb-5">
   <h1><span>{{$user->name}}</span></h1>
   <div class="row">
    <div class="col-md-4">
        <img src="{{$user->path}}" alt=""/>
        <h6>Пiдписатися на {{$user->name}} у соцмережі</h6>
            <div class="social-home">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google"  aria-hidden="true"></i></a>
             </div>
    </div>
    <div class="col-md-8">
    <h3>Биография</h3>
        {{$user->description}}
        <br>
        <br>
    </div>
   </div>
   <div class="col">
        <a href="/verses/authors/{{$user->id}}"> Усi вiршi автора {{$user->name}}</a>
             <br>
             <br>
        <a href="/"> <button class="btn btn-default-shop mt-3 mr-3">Підписатися</button></a>
    </div>
   <div class="author-book-header">
   <h3>Збірки віршів</h3>
   </div>

        <div class="row mb-5">
            @foreach($user->books as $book)
                <div class="col-md-3">
                    <div class="bg-book">
                        @include('shop.book')
                    </div>
                </div>
            @endforeach
        </div>
         <div class="search-line fluid container d-flex flex-row justify-content-center align-items-center mb-5">
          <a href="/shop"> <button class="btn btn-outline-blue my-2 my-sm-0 mb-5">ПЕРЕЙТИ В МАГАЗИН</button></a>
          </div>
</div>
@endsection
