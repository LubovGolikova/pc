@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit {{$verse->name}}</h1>
@stop

@section('content')
    {!! Form::model($verse, ['route' => ['verses.update', $verse->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Content') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category', $categories , null, ['class'=>'form-control']) !!}
    </div>


    {!! Form::close() !!}
@stop

@section('js')
   
@stop

