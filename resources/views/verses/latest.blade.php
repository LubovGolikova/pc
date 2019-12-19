@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @foreach($verses as $verse)
        <article>
            <a href="/verses/{{$verse->id}}">{{$verse->name}}</a>
            <a href="#">{{$verse->user->name}}</a>
            <a href="#">{{$verse->category->name}}</a>
            {{\Carbon\Carbon::parse($verse->created_at)->format('d.m.Y')}}
            {{$verse->likes}}
            {{$verse->views}}
        </article>

    @endforeach
@endsection



@section('js')

@endsection