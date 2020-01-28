@extends('layouts.app')

@section('content')
<div class="container authors">
   <h1><span>Результаты поиска</span></h1>

    @foreach($users as $user)
        <div class="col-md-3">
            <p> {{$user->name}}</p>
        </div>
     @endforeach
    </div>

@endsection
