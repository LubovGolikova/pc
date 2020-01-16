@extends('layouts.app')

@section('content')
<div class="container authors">
   <h1><span>{{ __('all.about') }}</span></h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','', ['class'=> 'form-control','placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
    {{Form::label('email','E-email Address')}}
    {{Form::text('email','', ['class' =>'form-control','placeholder' => 'Enter email'])}}
    </div>
    <div class="form-group">
    {{Form::label('massage','Message')}}
    {{Form::textarea('massage','', ['class'=>'form-control', 'placeholder' => 'Enter message'])}}
    </div>
    <div>
    {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
    </div>
    {!! Form::close()!!}
    <br>
    </div>

@endsection

@section('js')

@endsection