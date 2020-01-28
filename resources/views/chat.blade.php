@extends('layouts.app')

@section('content')

<div class="container authors mb-5 ">
<h1><span>{{ __('all.chat') }}</span></h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer" style="margin: 20px 0; border-top: 2px #404f6e solid; padding-top: 20px;">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection